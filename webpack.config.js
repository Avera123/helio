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
    // uncomment to define the assets of the project
    .addEntry('jquery','./assets/js/jquery.min.js')
    .addEntry('bootstrapjs','./assets/js/bootstrap.min.js')
    .addEntry('slider','./assets/js/slider.js')

    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()

    // show OS notifications when builds finish/fail
    // .enableBuildNotifications()

    // uncomment if you use Sass/SCSS files
    // .enableSassLoader()

    // uncomment for legacy applications that require $/jQuery as a global variable
    .autoProvidejQuery()
;

module.exports = Encore.getWebpackConfig();
