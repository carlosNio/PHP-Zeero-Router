<?php
// zeero namespace
// you can also include de composer autoload
require_once "Zeero/autoload.php";

use Zeero\Router\Request;
use Zeero\Router\Route;
use Zeero\Router\Router;

// router instance
$router = new Router;

// request instance
$request = new Request;


// dispatch with closure
Route::get('/route', function () {
});
// dispatch wia class method
Route::get("/route", ['classname', 'method']);


// get route
Route::get('/', function () {
    echo "Ola mundo";
});


// route with parameter
Route::get('/user/{name}', function ($name) {
});
// route with opcional parameter
Route::get('/user/{name?}', function ($name) {
});


// route closure parameters will be injected by the router
Route::get('/user/{name}', function (Request $request, $name) {
});


// this router method allow you to respond NOT FOUND requests

$router->NotFoundAction(function (Request $request) {
    echo "PATH: <b>{$request->path()}</b> NOT FOUND <br>";
});


// the run method require a instance of Request and the routes array provided by Router::getRouter()
$router->run($request, Route::getRoutes());
