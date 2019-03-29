<?php
//单个数据库服务器
return [
    'host' => getenv('DB_HOST', '127.0.0.1'),
    'port' => getenv('DB_PORT', '3306'),
    'dbname' => getenv('DB_DATABASE', ''),
    'options' => null,
    'username' => getenv('DB_USERNAME', 'root'),
    'password' => getenv('DB_PASSWORD', ''),
];
