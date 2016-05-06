<?php

//return [
//    'class' => 'yii\db\Connection',
//    'dsn' => 'sqlite:'. __DIR__ .'/../data/yii2basic.sq3',
//    'charset' => 'utf8',
//];

return [
    'class' => 'yii\db\Connection',
    'dsn' => getenv('DB_DSN'),
    'username' => getenv('DB_USERNAME'),
    'password' => getenv('DB_PASSWORD'),
    'charset' => 'utf8',
];
