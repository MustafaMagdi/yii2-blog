<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'mongodb' => [
            'class' => '\yii\mongodb\Connection',
            // 'dsn' => 'mongodb://192.168.5.150/vote', // local
            'dsn' => 'mongodb://mongo:321@192.168.5.143/blog', // remote
        ],
    ],
];
