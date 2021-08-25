let mix = require('laravel-mix');
let path = require('path');

mix.setPublicPath(path.resolve('./public/'));

mix.postCss("./resources/css/styles.css", "./public/css");

mix.options({
    postCss: [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]
});

mix.version();