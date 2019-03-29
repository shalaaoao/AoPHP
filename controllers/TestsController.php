<?php
namespace AoPHP\Controllers;

class TestsController extends BaseController
{
    public function test()
    {
        dd(microtime(true) - AOPHP_START);

//        echo env('APP_NAME', 'mysql');
//        die;
//        $this->smarty->assign(['name' => '张三三']);
//
//        $this->smarty->display('test.html');
    }
}
