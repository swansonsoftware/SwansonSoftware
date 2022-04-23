const path = require('path')

module.exports = {
    entry: './javascript/swansonSoftware.js',
    output: {
        filename: 'bundled.js',
        path: path.resolve(__dirname, 'javascript')
    },
    mode: 'development',
    watch: true
}