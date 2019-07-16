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
        'css/site.css',
        'css/admin.css',
        'css/amazeui.min.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/icons.css',
        'css/layui.css',
        'css/main.css',
        'css/plugins.css',
    ];
    public $js = [
        'js/amazeui.min.js',
        'jquery-1.11.3.min.js',
        'layui.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
