<?php

require(dirname(__DIR__) . '/src/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(SRC_PATH . '/config/main.php'),
    require(SRC_PATH . '/config/web.php')
);

$application = new yii\web\Application($config);
$application->run();
