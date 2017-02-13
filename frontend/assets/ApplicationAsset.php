<?php

namespace frontend\assets;
use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ApplicationAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    
    public $jsOptions = array(
    		'position' => \yii\web\View::POS_HEAD
    );
    
    public $css = [
        'inspinia/css/bootstrap.min.css',
        'inspinia/font-awesome/css/font-awesome.css',
        'inspinia/css/plugins/toastr/toastr.min.css',
        'inspinia/css/animate.css',
        'inspinia/css/style.css',
        'datatable/css/jquery.dataTables.css',
    ];
    
    public $js = [        
        'inspinia/js/plugins/metisMenu/jquery.metisMenu.js',
        'datatable/js/jquery.dataTables.js',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    
}
