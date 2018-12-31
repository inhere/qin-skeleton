<?php
/**
 * the common config
 */
return [
    'name'     => env('APP_NAME', 'My App'),
    'debug'    => env('APP_DEBUG', false),
    'env'      => env('APP_ENV', 'prod'),
    'charset'  => 'UTF-8',
    'rootPath' => BASE_PATH,

    'application' => [
        'host'        => 'localhost',
        'baseTitle'   => 'ArtFonts',
        'description' => 'application description',
        'keywords'    => 'application keywords',
    ],

    'displayErrorDetails'               => true,
    'determineRouteBeforeAppMiddleware' => true,

    'filterFavicon' => true,
    'enableCsrfToken' => true,

    'response' => [
        'chunkSize'              => 4096,
        'httpVersion'            => '1.1',
        'addContentLengthHeader' => false,
    ],

    'errorRender' => [
        'displayErrorDetails' => true,
        'rootPath'            => BASE_PATH,
        'hideRootPath'        => true,
    ],

    'assetUrls' => [
        'jquery' => 'https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js',
        'riot3' => 'https://cdn.bootcss.com/riot/3.7.3/riot+compiler.min.js',
        'bootstrap4' => [
            'https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css',
            'https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js',
        ]
    ],
];
