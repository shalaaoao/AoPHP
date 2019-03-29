<?php

namespace AoPHP\Controllers;

use AoPHP\PDO\Model;

class BaseController
{
    protected $smarty;

    public function __construct()
    {
        $this->setSmarty();
        $this->setDB();
    }

    //设置Smarty
    public function setSmarty()
    {
        $this->smarty = new \Smarty();

        //设置模板定界符
        $this->smarty->left_delimiter  = "{{";
        $this->smarty->right_delimiter = "}}";

        //设置template临时目录路径
        $this->smarty->setCompileDir(__DIR__ . '/../storage/templates_c');

        //设置模板文件路径
        $this->smarty->setTemplateDir(__DIR__.'/../views/');
    }

    //设置DB
    public function setDB()
    {
        //加载数据库配置文件
        Model::config(require_once __DIR__ . '/../config/db.php');
    }
}
