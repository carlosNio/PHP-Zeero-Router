<?php

use Zeero\Router\Request;
use Zeero\Router\Route;
use Zeero\Router\Router;

require_once "Zeero/autoload.php";

define('time', microtime(true));


$router = new Router;
$request = new Request;



Route::get('/user/{nome}/{id?}', function ($nome, $id, Request $request) {

    echo $nome;
    echo "<br> ID: $id";
}, ['id' => 'digit']);




Route::get('/test', function (Request $request) {


});






$router->NotFoundAction(function (Request $request) {
    echo "PATH: <b>{$request->path()}</b> NOT FOUND <br>";
});



$router->run($request, Route::getRoutes());