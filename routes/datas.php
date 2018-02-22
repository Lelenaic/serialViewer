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

Route::get('/datas/series', 'SeriesController@all');

Route::get('/datas/series/genre/{idGenre}', 'SeriesController@showByGenre');

Route::post('/datas/addSuiviSerie', 'SuiviSerieController@insert');
