<?php
define('AOPHP_START', microtime(true));

error_reporting(E_ALL);
ini_set('display_errors', '1');

// composer自动加载
require_once __DIR__ . '/../vendor/autoload.php';

// 加载路由文件
require_once __DIR__ . '/../routes/web.php';
