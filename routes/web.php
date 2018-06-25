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

Route::get('/','PostsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test','CategoriesController@index');
Route::resource('/posts','PostsController');

Route::resource('/users','UsersController');
Route::get('/users/{user}/post','UsersController@show')->name('users.post');
Route::get('/users/{user}/comment','UsersController@comment')->name('users.comment');
Route::get('/users/{user}/favorite','UsersController@favorite')->name('users.favorite');
Route::get('/users/{user}/cover','UsersController@cover')->name('users.cover');


Route::resource('/categories','CategoriesController');
