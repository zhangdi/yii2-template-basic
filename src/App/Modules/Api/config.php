<?php

return [
    'id' => 'api',
    '__class' => 'App\Modules\Api\Module',
    'urlRules' => [
        '/api/<controller:[\w-]>/<action:[\w-]>' => '>/api/<controller>/<action>',
        '/api/<controller:[\w-]>' => '>/api/<controller>/index',
        '/api' => '/api/default/index',
    ]
];