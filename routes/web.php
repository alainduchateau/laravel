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

Route::get('/', ['uses' => 'WelcomeController@index', 'as' => 'home']);

Route::get('/article/{n}','ArticleController@show')->where('n','[0-9]+');

Route::get('users', 'UsersController@getInfos');

Route::post('users', 'UsersController@postInfos');

Route::get('contact', 'ContactController@getForm');

Route::post('contact', 'ContactController@postForm');

//comment to test git