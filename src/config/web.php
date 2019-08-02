<?php

$config = [
    'id' => 'web',
    'controllerNamespace' => 'App\Controllers',
    'viewPath' => SRC_PATH . '/views',
    'bootstrap' => [
        'log',
        [
            'class' => 'App\Bootstrap\WebModuleAutoloader',
            'modulePaths' => [
                '@App/Modules'
            ]
        ]
    ],
    'components' => [
        'request' => [
            'class' => 'yii\web\Request',
            'cookieValidationKey' => 'please-replace',
        ],
        'errorHandler' => [
            'class' => 'yii\web\ErrorHandler',
            'errorAction' => 'site/error',
        ],
        'user' => [
            'identityClass' => 'App\Models\User'
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ]
    ]
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
