<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'SiteController@index')->middleware('auth');

Route::get('/login', 'SiteController@login')->name('login')->middleware('guest');
Route::get('/registration', 'SiteController@registration')->middleware('guest');

Route::get('/logout', 'SessionController@stop')->middleware('auth');

Route::group(['prefix' => '/session'], function() {
    Route::post('start', 'SessionController@start')->middleware('guest');
});

Route::group(['prefix' => '/user'], function() {
    Route::post('create', 'UserController@create')->middleware('guest');
});

Route::group(['prefix' => '/module'], function() {
    Route::get('board', 'BoardController@index')->middleware('auth');
    
    Route::get('project', 'ProjectController@index')->middleware('auth');
    Route::get('project/create', 'ProjectController@create')->middleware('auth');
});
