<?php

$config = [
    'basePath' => APP_BASE_PATH,
    'vendorPath' => VENDOR_PATH,
    'runtimePath' => RUNTIME_PATH,
    'language' => 'zh-CN',
    'timezone' => 'Asia/Shanghai',
    'aliases' => require(SRC_PATH . '/config/aliases.php'),
    'bootstrap' => ['log'],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(SRC_PATH . '/config/db.php'),
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => SRC_PATH . '/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
    'params' => require(__DIR__ . '/params.php')
];

return $config;