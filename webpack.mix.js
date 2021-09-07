const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ]);

mix.copy('resources/images', 'public/images');

mix.browserSync({
    proxy: 'http://127.0.0.1:8000/'
});
