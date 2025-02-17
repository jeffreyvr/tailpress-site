let mix = require('laravel-mix');
let path = require('path');

mix.setPublicPath(path.resolve('./public/'));

mix.postCss("./resources/css/styles.css", "./public/css", require('@tailwindcss/postcss'));

if (mix.inProduction()) {
    mix.version();
} else {
    Mix.manifest.refresh = _ => void 0
}
