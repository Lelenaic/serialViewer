<?php
require_once('datas.php');
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/series', 'SeriesController@showAll');

Route::get('/series/{id}', 'SeriesController@showOne');

Route::get('/user/{id}', 'UserController@showOne');
Route::get('/user/friends/{id}', 'UserController@showFriends');
//Route::get('/currentUser/{id}', 'UsersController@currentUser');
//Route::get('/users/{id}', 'UsersController@showOne');
