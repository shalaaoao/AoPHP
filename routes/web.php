<?php
use NoahBuscher\Macaw\Macaw;

Macaw::get('/', function(){
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
