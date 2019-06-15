<?php


namespace App\Assets\App;


use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $sourcePath = '@App/Assets/App/assets';
    public $css = [
        'css/app.css'
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $publishOptions = [
        'forceCopy' => YII_DEBUG,
    ];
}