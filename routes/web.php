<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/',[UserController::class,'index']);
$router->get('User', 'UserController@index');
$router->group(['prefix' =>'api'], function () use ($router) {
    $router->post('user','UserController@create'); 
    $router->get('get','UserController@get');  
    $router->put('updata','UserController@updata');  
    $router->delete('delete','UserController@delete'); 
});

$router->get('Admin', 'AdminController@index');
$router->group(['prefix' =>'api'], function () use ($router) {
    $router->post('Admin','AdminController@create'); 
    $router->get('get','AdminController@get');  
    $router->put('updata','AdminController@updata');  
    $router->delete('delete','AdminController@delete'); 
});