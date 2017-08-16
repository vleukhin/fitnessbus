var path = require('path');

module.exports = {
    entry: './assets/js/app.js',
    output: {
        filename: 'app.bundle.js',
        path: path.resolve(__dirname, 'public/js')
    }
};