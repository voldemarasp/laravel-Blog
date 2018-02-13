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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('index');
Route::get('/admin', 'HomeController@admin')->name('admin');

Route::get('/all', 'PostController@all')->name('all');
Route::get('/edit', 'PostController@edit')->name('edit');
Route::get('/delete', 'PostController@delete')->name('delete');
Route::get('/single', 'PostController@single')->name('single');
Route::get('/create', 'PostController@create')->name('create');
Route::post('/store', 'PostController@store')->name('store');
Route::post('/update', 'PostController@update')->name('update');

Route::post('/addcomm', 'CommController@addcomm')->name('addcomm');
Route::get('/delcomm', 'CommController@delcomm')->name('delcomm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
