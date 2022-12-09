<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAssetPortal extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    //'css/site.css',   
   'dependenciess/css/sb-admin-2.min.css',
   'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i',
   'dependenciess/vendor/fontawesome-free/css/all.min.css'
    
         
    ];
    public $js = [
    'dependenciess/vendor/jquery/jquery.min.js',
    'dependenciess/vendor/bootstrap/js/bootstrap.bundle.min.js',
    'dependenciess/vendor/jquery-easing/jquery.easing.min.js',
    'dependenciess/js/demo/chart-pie-demo.js',
    'dependenciess/js/sb-admin-2.min.js',

   
   'dependenciess/vendor/chart.js/Chart.min.js',

    
   'dependenciess/js/demo/chart-area-demo.js',
   

    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap5\BootstrapPluginAsset:',
       
    ];
}

