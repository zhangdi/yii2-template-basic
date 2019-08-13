<?php


use ZhangDi\Env\Env;

defined("ROOT_PATH") or define("ROOT_PATH", dirname(__DIR__));
defined("SRC_PATH") or define("SRC_PATH", dirname(__DIR__) . '/src');
defined("APP_BASE_PATH") or define("APP_BASE_PATH", dirname(__DIR__) . '/src/App');
defined("VENDOR_PATH") or define("VENDOR_PATH", dirname(__DIR__) . '/vendor');
defined("RUNTIME_PATH") or define("RUNTIME_PATH", ROOT_PATH . '/runtime');

require(VENDOR_PATH . '/autoload.php');

define("YII_DEBUG", Env::getBoolean('DEBUG', false));
define("YII_ENV", Env::get('ENV', 'prod'));

require(VENDOR_PATH . '/yiisoft/yii2/Yii.php');
