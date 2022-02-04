const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

mix.sass('resources/sass/app.scss', 'public/css', {
    sassOptions: {
        quietDeps: mix.inProduction(),
    },
});

// mix.extract();
mix.disableNotifications();


// https://github.com/laravel-mix/laravel-mix/issues/2764#issuecomment-804247445
mix.after((stats) => {
    const assets = {...stats.compilation.assets};
    stats.compilation.assets = {};

    if (!mix.inProduction()) {
        for (const [path, asset] of Object.entries(assets)) {
            if (!path.includes('_test_jsx.js') && !path.includes('_test_js.js')) {
                stats.compilation.assets[path] = asset;
            }
        }
    }
});

if (mix.inProduction()) {
    mix.version();
    mix.sourceMaps();
}
