const path = require('path')

postCSSPlugins = [
    require('postcss-import'),
    require('postcss-mixins'),
    require('postcss-simple-vars'),
    require('postcss-nested'),
    require('autoprefixer')
]

module.exports = {
    entry: './assets/scripts/App.js',
    output: {
        filename: 'bundled.js',
        path: path.resolve(__dirname)
    },
    devServer: {
        watchFiles: ['**/*.html'],
        static: {
            directory: path.join(__dirname)
        },
        hot: true,
        port: 3000,
        host: '0.0.0.0'
    },
    mode: 'development',
    module: {
        rules: [
            {
                test: /\.css$/i,
                use: ["style-loader", "css-loader", { loader: "css-loader", options: {url: false}, loader: "postcss-loader", options: { postcssOptions: { plugins: postCSSPlugins } } }]
            }
        ]
    }
}