<?php
$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/test_db.php';
$url = require __DIR__ . '/url.php';
$modules = require __DIR__ . '/modules.php';
$httpclient = require __DIR__ . '/httpclient.php';

/**
 * Application configuration shared by all test types
 */
return [
    'id' => 'basic-tests',
    'basePath' => dirname(__DIR__),  
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],  
    'modules' => $modules,
    'components' => [
        'assetManager' => [            
            'basePath' => __DIR__ . '/../web/assets',
        ],
        'user' => [
            'identityClass' => 'app\modules\v1\models\User',
        ],        
        'request' => [
            'cookieValidationKey' => 'test',
            'enableCsrfValidation' => false,
            // but if you absolutely need it set cookie domain to localhost
            /*
            'csrfCookie' => [
                'domain' => 'localhost',
            ],
            */
        ],
        'httpclient' => $httpclient,
        'db' => $db,
        'urlManager' => $url,
    ],
    'params' => $params,
];
