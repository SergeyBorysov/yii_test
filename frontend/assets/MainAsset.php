<?php
/**
 * Created by PhpStorm.
 * User: borisov
 * Date: 01.02.2017
 * Time: 14:48
 */

namespace frontend\assets;


use yii\web\AssetBundle;
use yii\web\View;

class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'source/css/main.css',
       // 'source/css/reset.css',
        'source/css/responsive.css',
    ];
    public $js = [
        'source/js/jquery.js',
        'source/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}