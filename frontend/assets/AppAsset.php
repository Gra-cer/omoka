<?php

namespace frontend\assets;


use yii\web\AssetBundle;



/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    //'css/site.css',   
    'dependencies/css/vendor/ecicons.min.css',
    'dependencies/css/plugins/animate.css',
    'dependencies/css/plugins/swiper-bundle.min.css',
    'dependencies/css/plugins/jquery-ui.min.css',
    'dependencies/css/plugins/countdownTimer.css',
    'dependencies/css/plugins/slick.min.css',
    'dependencies/css/plugins/bootstrap.css',
    'dependencies/css/demo4.css',
    'dependencies//css/plugins/nouislider.css',
    'dependencies/css/loginc.css',
    'dependencies/css/responsive.css',
    'dependencies/css/backgrounds/bg-4.css',
    'dependencies/css/style.css',
         
    ];
    public $js = [
     
        
    
    'dependencies/js/emaildecode.js',
    'dependencies/js/vendor/jquery-3.5.1.min.js',
    'dependencies/js/vendor/popper.min.js',
    'dependencies/js/vendor/bootstrap.min.js',
    'dependencies/js/vendor/jquery-migrate-3.3.0.min.js',
    'dependencies/js/vendor/modernizr-3.11.2.min.js',
    'dependencies/js/plugins/swiper-bundle.min.js',
    'dependencies/js/plugins/countdownTimer.min.js',
    'dependencies/js/plugins/scrollup.js',
    'dependencies/js/plugins/jquery.zoom.min.js',
    'dependencies/js/plugins/slick.min.js',
    'dependencies/js/plugins/infiniteslidev2.js',
    'dependencies/js/plugins/click-to-call.js',
    'dependencies/js/vendor/index.js',
    'dependencies/js/demo-4.js',
    
    'dependencies/js/vendor/jquery.magnific-popup.min.js',
    'dependencies/js/plugins/jquery.sticky-sidebar.js',
    'dependencies/js/plugins/product-360.js',

    
    'dependencies/js/vendor/index.js',
    'dependencies/js/main.js',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapPluginAsset',
    ];
}
