<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once __DIR__ . '/vendor/autoload.php';

use NoahBuscher\Macaw\Macaw;
use \AoPHP\PDO\Model;

Model::config(require_once __DIR__ . '/config/db.php');

Macaw::get('/', function(){
    new \AoPHP\Controllers\TestsController();
    echo 'Welcome to AoPHP';
});

//用户的增删改查
Macaw::get('/users', '\AoPHP\Controllers\UsersController@index');
Macaw::post('/users', '\AoPHP\Controllers\UsersController@store');
Macaw::get('/users/(:num)', '\AoPHP\Controllers\UsersController@show');
Macaw::put('/users', '\AoPHP\Controllers\UsersController@update');
Macaw::delete('/users/(:num)', '\AoPHP\Controllers\UsersController@destroy');


Macaw::get('/test', '\AoPHP\Controllers\TestsController@test');


Macaw::dispatch();
