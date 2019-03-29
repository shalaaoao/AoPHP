<?php

//配置文件类
$dotenv = Dotenv\Dotenv::create(__DIR__.'/../');
$dotenv->load();

//加载数据库配置文件
\AoPHP\PDO\Model::config(require_once __DIR__ . '/../config/db.php');
