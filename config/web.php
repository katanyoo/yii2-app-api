<?php

$params = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);
$db = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/db.php',
    require __DIR__ . '/db-local.php'
);
$url = require __DIR__ . '/url.php';
$modules = require __DIR__ . '/modules.php';
$httpclient = require __DIR__ . '/httpclient.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'modules' => $modules,
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'mi8ToETsNYffmkR0ZmHFj2kTCu1PWaQb',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\modules\v1\models\Client',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
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
        'httpclient' => $httpclient,
        'db' => $db,
        'urlManager' => $url,
    ],
    'params' => $params,
];

return $config;
