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

Route::get('/','FrontController@welcome');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('catalogo','FrontController@catalogo');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::group(['middleware' => 'admin' , 'namespace' => 'Admin'], function(){
Route::get('/usuario','UserController');


});