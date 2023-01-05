const currentTask = process.env.npm_lifecycle_event
const path = require('path')
const {CleanWebpackPlugin} = require('clean-webpack-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin')
const HtmlWebpackPlugin = require('html-webpack-plugin')
const fse = require('fs-extra')
const { forEach } = require('lodash')

postCSSPlugins = [
    require('postcss-import'),
    require('postcss-mixins'),
    require('postcss-simple-vars'),
    require('postcss-nested'),
    require('autoprefixer')
]

class RunAfterCompile {
    apply(compiler) {
        compiler.hooks.done.tap('Copy Images', function() {
            fse.copySync('./assets/images', './dist/assets/images')
        })
        compiler.hooks.done.tap('Copy Album Images', function() {
            fse.copySync('./album/images', './dist/album/images')
        })
    }
}

let cssConfig = {
    test: /\.css$/i,
    use: ["css-loader", { loader: "css-loader", options: {url: false}, loader: "postcss-loader", options: { postcssOptions: { plugins: postCSSPlugins } } }]
}


let swansonSoftareHtmlPages = fse.readdirSync(__dirname).filter(function(file) {
    return file.endsWith('.html')
}).map(function(page) {
    return new HtmlWebpackPlugin({
        filename: page,
        template: `./${page}`
    })
})

let photosHtmlPages = fse.readdirSync(path.join(__dirname, 'album')).filter(function(file) {
    return file.endsWith('.html')
}).map(function(page) {
    return new HtmlWebpackPlugin({
        filename: `./album/${page}`,
        template: `./album/${page}`
    })
})

let htmlpages = swansonSoftareHtmlPages.concat(photosHtmlPages)

let config = {}

if (currentTask == 'dev') {
    
    config.entry = './assets/scripts/App.js'
    config.plugins = swansonSoftareHtmlPages
    config.module = {
        rules: [
            cssConfig
        ]
    }

    cssConfig.use.unshift('style-loader')
    config.output = {
        filename: 'bundled.js',
        path: path.resolve(__dirname)
    }
    config.devServer = {
        watchFiles: ['**/*.html'],
        static: [
            {
                directory: path.join(__dirname)
            },
            {
                directory: path.join(__dirname, 'album')
            },
        ],
        hot: true,
        port: 3000,
        host: '0.0.0.0'
    }
    config.mode = 'development'
}

if (currentTask == 'build') {
    config.entry = './assets/scripts/App.js'
    config.plugins = htmlpages
    config.module = {
        rules: [
            cssConfig
        ]
    }
    
    config.module.rules.push({
        test: /\.js$/,
        exclude: /(node_modules)/,
        use: {
            loader: 'babel-loader',
            options: {
                presets: ['@babel/preset-env']
            }
        }
    })

    cssConfig.use.unshift(MiniCssExtractPlugin.loader)
    config.output = {
        filename: '[name].[chunkhash].js',
        chunkFilename: '[name].[chunkhash].js',
        path: path.resolve(__dirname, 'dist')
    }

    config.mode = 'production'
    config.optimization = {
        minimize: true,
        minimizer: [`...`, new CssMinimizerPlugin()]
    }
    
    config.plugins.push(
        new CleanWebpackPlugin(), 
        new MiniCssExtractPlugin({filename: 'styles.[chunkhash].css'}),
        new RunAfterCompile()
    )
}

module.exports = config