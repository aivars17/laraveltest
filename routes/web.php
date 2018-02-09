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
Route::get('/edit', 'PostsController@edit')->name('edit');
Route::get('/write', 'PostsController@create')->name('create');
Route::post('/post/bam', 'CommentsController@index');
Route::post('/', 'CommentsController@post_comment')->name('succes');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
