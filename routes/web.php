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

Route::get('/posts', 'BlogController@index')->name('posts.index');

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

Route::resource('posts', 'BlogController');

Route::resource('post', 'PostController');

Route::get('admin', 'AdminController@index')->name('admin.index');

Route::get('admin/{id}', 'AdminController@show')->name('admin.show');

Route::get('admin/{id}/edit', 'AdminController@edit')->name('admin.edit');

Route::put('admin/{id}', 'AdminController@update')->name('admin.update');



