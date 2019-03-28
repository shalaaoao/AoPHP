<?php


require_once __DIR__ . '/vendor/autoload.php';

use NoahBuscher\Macaw\Macaw;
use \AoPHP\PDO\Model;

Model::config(require_once __DIR__ . '/config/db.php');


Macaw::get('/', function(){
    echo 'Welcome to AoPHP';
});

//用户的增删改查
Macaw::get('/users', 'AoPHP\Controllers\Users@index');
Macaw::post('/users', 'AoPHP\Controllers\Users@store');
Macaw::get('/users/(:num)', 'AoPHP\Controllers\Users@show');
Macaw::put('/users', 'AoPHP\Controllers\Users@update');
Macaw::delete('/users/(:num)', 'AoPHP\Controllers\Users@destroy');

Macaw::dispatch();
