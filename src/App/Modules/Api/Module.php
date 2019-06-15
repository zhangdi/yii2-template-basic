<?php


namespace App\Modules\Api;


class Module extends \yii\base\Module
{
    public $controllerNamespace = 'App\Modules\Api\Controllers';

    public function init()
    {
        parent::init();

        \Yii::$app->user->enableSession = false;
    }
}