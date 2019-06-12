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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','userController@homePage');

Route::get('panel','adminController@panel')->name('panel');

Route::get('player/add','playerController@addPlayer')->name('addPlayer');
Route::post('player/add/product','playerController@addUserProduct')->name('addUserProduct');
Route::get('player/list','playerController@listPlayer')->name('listPlayer');

Route::get('team/add','teamController@addTeam')->name('addTeam');
Route::post('team/add/product','teamController@addTeamProduct')->name('addTeamProduct');
Route::get('team/list','teamController@listTeam')->name('listTeam');
Route::get('team/transfer/{id}/{user}','teamController@transfer')->name('transfer');