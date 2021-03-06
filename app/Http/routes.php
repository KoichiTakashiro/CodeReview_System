<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//会員登録後にTopページヘ飛ばす
// Route::get('home', 'PostsController@getIndex');
Route::get('/', 'PostsController@getIndex');
//Route::get('/home', 'PostsController@getIndex');
Route::controller('posts', 'PostsController');
Route::controller('comments', 'CommentsController');
//Route::controller('posts/create', 'PostsController');


// 認証ルート…
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// 登録ルート…
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
