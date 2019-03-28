<?php
namespace AoPHP\PDO;

/**
 * Class Model
 * @package AoPHP\PDO
 */
class Model extends Mysql
{
    public static function config($config)
    {
        parent::getInstance($config);
    }
}
