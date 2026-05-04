<?php

declare(strict_types=1);

$params = require __DIR__ . '/params.php';

return [
    'id' => 'stansoft-solutions',
    'basePath' => dirname(__DIR__),
    'bootstrap' => [],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            'cookieValidationKey' => 'replace-this-with-a-long-random-secret-before-production',
        ],
        'cache' => [
            'class' => yii\caching\FileCache::class,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'send-mail' => 'site/send-mail',
            ],
        ],
    ],
    'params' => $params,
];
