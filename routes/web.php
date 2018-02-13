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

Route::get('/', 'HomeController@index')->name('index');
Route::get('post/{id}', 'PostsController@single')->name('single');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/edit', 'PostsController@edit')->name('edit');
    Route::get('/write', 'PostsController@create')->name('create');
    Route::get('/edit/{id}', 'PostsController@delete')->name('delete');
    Route::get('update/{id}', 'PostsController@update')->name('update');
    Route::post('update/{id}', 'PostsController@updateStore')->name('updateStore');
    Route::get('post_comments/{id}', 'CommentsController@post_comments')->name('post_comments');
    Route::get('delete/{id}', 'CommentsController@delete_comment')->name('delete_comment');
});




Route::post('post/{id}', 'CommentsController@post_comment')->name('store_comment');
Route::post('/', 'PostsController@store')->name('store_post');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
