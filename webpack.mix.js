const mix = require('laravel-mix');
const webpack = require('webpack');

const Paths = {
    bootstrap: './node_modules/bootstrap/',
    swiper: './node_modules/swiper/dist/css/'
};

mix.sass('./stylesheet/style.scss', './dist/css/', { includePaths: [Paths.bootstrap + 'scss', Paths.swiper] })
    .webpackConfig({
        plugins: [
            new webpack.ProvidePlugin({
                '$': 'jquery',
                'jQuery': 'jquery',
                'window.jQuery': 'jquery',
            }),
        ],
        module: {
            rules: [
                {
                    test: /\.js$/, // Check for all js files
                    exclude: /node_modules\/(?!(dom7|swiper)\/).*/,
                    loader: 'babel-loader'
                }
            ]
        }
    })
    .js('./js/app.js', './dist/js/')
    .browserSync({
        proxy: 'http://localhost:3330/',
        files: [
            "./stylesheet/**/*.css",
            "./js/**/*.js",
            {
                match: ["./**/*.php"]
            }
        ]
    });
