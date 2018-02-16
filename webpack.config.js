var Encore = require('@symfony/webpack-encore');

Encore
    // the project directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    // uncomment to create hashed filenames (e.g. app.abc123.css)
    // .enableVersioning(Encore.isProduction())


    .addStyleEntry('bootstrapcss','./assets/css/bootstrap.min.css')
    .addStyleEntry('font','./assets/css/font-awesome.min.css')
    .addStyleEntry('style','./assets/style.css')
    .addStyleEntry('animate','./assets/animate-it/css/animations.css')
    .addStyleEntry('animate-ie','./assets/animate-it/css/animations-ie-fix.css')
    .addStyleEntry('cardClient','./assets/css/sogacss/tarjetasClientes.css')
    .addStyleEntry('teamCard','./assets/materialCards/dist/material-cards.css')
    .addStyleEntry('teamCardH','./assets/materialCards/dist/material-cards-auto-height.css')
    .addStyleEntry('testimoniosClientesCSS','./assets/css/sogacss/testimoniosClientes.css')
    .addStyleEntry('sllider','./assets/sllider/slider.scss')
    // uncomment to define the assets of the project
    .addEntry('jquery','./assets/js/jquery.min.js')
    .addEntry('bootstrapjs','./assets/js/bootstrap.min.js')
    .addEntry('slider','./assets/js/slider.js')
    .addEntry('animatejs','./assets/animate-it/js/css3-animate-it.js')
    .addEntry('cardClientJs','./assets/js/sogajs/tarjetasClientes.js')
    .addEntry('teamCards','./assets/materialCards/js/jquery.material-cards.js')
    .addEntry('testimoniosClientesJS','./assets/js/sogajs/testimoniosClientes.js')
    .addEntry('slliderjs','./assets/sllider/slider.js')

    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()

    // show OS notifications when builds finish/fail
    // .enableBuildNotifications()

    // uncomment if you use Sass/SCSS files
    .enableSassLoader()

    // uncomment for legacy applications that require $/jQuery as a global variable
    .autoProvidejQuery()
;

module.exports = Encore.getWebpackConfig();
