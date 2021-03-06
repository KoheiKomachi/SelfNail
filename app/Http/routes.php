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

Route::get('/', function () {
    return view('welcome');
});

// ユーザ登録
Route::get('signup', 'Auth\AuthController@getRegister')->name('signup.get');
Route::post('signup', 'Auth\AuthController@postRegister')->name('signup.post');

// ログイン認証
Route::get('login', 'Auth\AuthController@getLogin')->name('login.get');
Route::post('login', 'Auth\AuthController@postLogin')->name('login.post');
Route::get('logout', 'Auth\AuthController@getLogout')->name('logout.get');

// デザイン詳細用
Route::get('/design/1', function () {
    return view('design1');
});

// デザイン手順用
Route::get('/process/1', function () {
    return view('process1');
});

//Comment投稿用
Route::group(['middleware' => 'auth'], function () {
    Route::resource('comments', 'CommentsController', ['only' => ['store']]);
});

//Design一覧作成・編集・削除用
Route::resource('designlist', 'DesignlistController');