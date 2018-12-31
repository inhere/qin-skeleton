<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2018-12-31
 * Time: 23:05
 */
return [
    // serviceProviders
    'serviceProviders' => [
        \App\Provider\CommonServiceProvider::class,
        \App\Provider\ConsoleServiceProvider::class,
        \App\Provider\WebServiceProvider::class,
    ],

    // common services

    /**
     * basic service
     */
    'logger'           => [
        'class'        => \Qin\Log\FileLogger::class,
        'name'         => 'app',
        'logFile'      => '@tmp/logs/application.log',
        'basePath'     => '@tmp/logs',
        'level'        => \Qin\Log\FileLogger::DEBUG,
        'splitType'    => 1,
        'bufferSize'   => 1000, // 1000,
        'pathResolver' => 'alias',
    ],

    'language' => [
        'class'     => \Toolkit\Collection\Language::class,
        'lang'      => 'zh-CN',
        'allowed'   => ['en', 'zh-CN'],
        'basePath'  => dirname(__DIR__) . '/res/languages',
        'langFiles' => [
            'response.php',
        ],
    ],

    'pinyin' => [
        'class' => \Overtrue\Pinyin\Pinyin::class,
        //[ \Overtrue\Pinyin\MemoryFileDictLoader::class ],
    ],
    'db'     => [
        'class' => \Inhere\Library\Components\DatabaseClient::class,
        [
            [
                'debug'       => 1,
                'user'        => 'root',
                'password'    => 'root',
                'database'    => 'art_fonts',
                'tablePrefix' => 'af_',
            ],
        ],
    ],
    'cache'  => [
        'class' => \PhpComp\LiteCache\FileCache::class,
        [
            'files',
            [
                'path'        => alias('@tmp/caches'),
                'securityKey' => 's6df89rtdlw',
            ]
        ]
    ],

    /**
     * http services
     */

    'router'          => [
        'class'           => \Inhere\Route\ServerRouter::class,
        'ignoreLastSlash' => true,
        'tmpCacheNumber'  => 200,
    ],

    // routeDispatcher
    'routeDispatcher' => [
        'class'           => \Qin\Http\RouteDispatcher::class,
        'outputBuffering' => false,
        'config'          => [
            'dynamicAction' => true,
        ],
    ],
    'renderer'        => [
        'class'      => \Toolkit\Web\ViewRenderer::class,
        'suffix'     => 'tpl',
        'layout'     => '_layouts/default.tpl',
        'viewsPath'  => dirname(__DIR__) . '/resources/views',
        'attributes' => [
            '_navKey' => '',
        ],
    ],
];
