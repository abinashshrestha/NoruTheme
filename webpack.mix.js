const mix = require('laravel-mix');

const Paths = {
    bootstrap: './node_modules/bootstrap/',
}

mix.sass('./stylesheet/style.scss', './dist/css/', { includePaths: [Paths.bootstrap + 'scss'] })
    .browserSync({
        proxy: 'http://localhost:3330/',
        files: [
            "./stylesheet/**/*.css",
            {
                match: ["./**/*.php"]
            }
        ]
    });
