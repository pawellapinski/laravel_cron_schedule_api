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

Route::get('/', function () {
    return view('welcome');
});

// api
Route::get('/fetchPost', 'ApiController@fetchPost');
Route::get('/fetchUser', 'ApiController@fetchUser');
Route::get('/patchPost', 'ApiController@patchPost');
Route::get('/patchUser', 'ApiController@patchUser');

// views
Route::get('/post', 'ViewPostsController@index')->name('post.index');
Route::get('/post/{id}', 'ViewPostsController@show')->name('post.show');
