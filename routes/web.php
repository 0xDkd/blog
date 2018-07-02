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

/**
 * Auth Route
 */
Auth::routes();

/**
 * Posts Route
 */
Route::get('/','PostsController@index');
Route::resource('/posts','PostsController');

/**
 * Category Route
 */
Route::resource('/categories','CategoriesController');

/**
 * User Route
 */
Route::resource('/users','UsersController');
Route::prefix('/users')->group(function () {
    //Show
    Route::get('{user}/post','UsersController@show')->name('users.post');
    Route::get('{user}/comment','UsersController@show')->name('users.comment');
    Route::get('{user}/favorite','UsersController@show')->name('users.favorite');
    Route::get('{user}/cover','UsersController@show')->name('users.cover');
    //Edit
    Route::get('{user}/edit/profile','UsersController@edit')->name('users.profile');
    Route::get('{user}/edit/preference','UsersController@edit')->name('users.preference');
    Route::get('{user}/edit/security','UsersController@edit')->name('users.security');
});


/**
 * Some Debug Route
 */

Route::get('/test','CategoriesController@index');

Route::get('info',function (){
    phpinfo();
});
