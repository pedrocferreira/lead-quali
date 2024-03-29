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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',['uses'=>'Controller@fazerlogin']);
Route::post('/login', ['as'=> 'user.login', 'uses' =>'DashboardController@auth']);
Route::get('/dashboard', ['as'=> 'user.dashboard', 'uses' =>'DashboardController@index']);
Route::get('/user', ['as'=> 'user.index', 'uses' => 'UsersController@index']);

  

Route::resource('user', 'UsersController');
Route::resource('empresa', 'EmpresasController');
Route::resource('lead', 'LeadsController');

