<?php

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
include app_path('Http/Controllers/Contatos/routes.php');
include app_path('Http/Controllers/Mensagens/routes.php');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', ['uses' => 'HomeController@index']);



