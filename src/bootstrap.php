<?php

defined("BASE_PATH") or define("BASE_PATH", dirname(__DIR__));
defined("SRC_PATH") or define("SRC_PATH", dirname(__DIR__) . '/src');
defined("APP_BASE_PATH") or define("APP_BASE_PATH", dirname(__DIR__) . '/src/App');
defined("VENDOR_PATH") or define("VENDOR_PATH", dirname(__DIR__) . '/vendor');
defined("RUNTIME_PATH") or define("RUNTIME_PATH", BASE_PATH . '/runtime');

require(VENDOR_PATH . '/autoload.php');

define("YII_DEBUG", true);
define("YII_ENV", 'dev');

require(VENDOR_PATH . '/yiisoft/yii2/Yii.php');
