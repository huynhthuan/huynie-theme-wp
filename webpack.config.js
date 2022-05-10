const path = require('path');

module.exports = {
    entry: {
        public: './assets/js/main.js',
    },
    output: {
        filename: 'bundle.js',
        path: path.resolve(__dirname, 'assets/dist/js'),
    },
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: ['style-loader', 'css-loader', 'sass-loader'],
            },
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader'],
            },
        ],
    },
};
