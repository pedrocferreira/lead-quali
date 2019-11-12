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
<<<<<<< HEAD

Route::resource('user', 'UsersController');
=======
Route::get('/user', ['as'=> 'user.index', 'uses' => 'UsersController@index']);
>>>>>>> 5e3b39c4cb5677c2f138e72da5fb89aa329c10a3
