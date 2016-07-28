var elixir = require('laravel-elixir');
require('./elixir-extensions');

elixir(function(mix) {
 mix
     //.phpUnit()
     //.compressHtml()

    /**
     * Copy needed files from /node directories
     * to /public directory.
     */
     .copy(
       'bower_resources/font-awesome/css/font-awesome.min.css',
       'public/css/fonts/font-awesome'
     )
     .copy(
           'bower_resources/bootstrap/dist/css/bootstrap.min.css',
           'public/css'
     )
     .copy(
       'bower_resources/bootstrap/dist/js/bootstrap.min.js',
       'public/js/vendor/bootstrap'
     )

     /**
      * Process frontend SCSS stylesheets
      */
     .sass([
        'frontend/youplay-shooter.scss',
        'plugin/sweetalert/sweetalert.scss'
     ], 'resources/assets/css/frontend/app.css')

     /**
      * Combine pre-processed frontend CSS files
      */
     .styles([
        'frontend/app.css'
     ], 'public/css/frontend.css')

     /**
      * Combine frontend scripts
      */
     .scripts([
        'plugin/sweetalert/sweetalert.min.js',
        'plugin/youplay/youplay.min.js',
        'plugins.js',
        'frontend/app.js'
     ], 'public/js/frontend.js')

     /**
      * Process backend SCSS stylesheets
      */
     .sass([
         'backend/app.scss',
         'backend/plugin/toastr/toastr.scss',
         'plugin/sweetalert/sweetalert.scss'
     ], 'resources/assets/css/backend/app.css')

     /**
      * Combine pre-processed backend CSS files
      */
     .styles([
         'backend/app.css'
     ], 'public/css/backend.css')

     /**
      * Make RTL (Right To Left) CSS stylesheet for the backend
      */
     .rtlCss()

     /**
      * Combine backend scripts
      */
     .scripts([
         'plugin/sweetalert/sweetalert.min.js',
         'plugins.js',
         'backend/app.js',
         'backend/plugin/toastr/toastr.min.js',
         'backend/custom.js'
     ], 'public/js/backend.js')

     /**
      * Combine pre-processed rtl CSS files
      */
     .styles([
         'rtl/bootstrap-rtl.css'
     ], 'public/css/rtl.css')

    /**
      * Apply version control
      */
     .version([
         "public/css/frontend.css",
         "public/js/frontend.js",
         "public/css/backend.css",
         "public/css/backend-rtl.css",
         "public/js/backend.js",
         "public/css/rtl.css"
     ]);
});