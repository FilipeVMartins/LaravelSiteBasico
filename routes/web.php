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

Route::get('/', "pagesController@getHome");

Route::get('/about', "pagesController@getAbout");

Route::get('/contact', "pagesController@getContact");

Route::get('/messages', 'MessagesController@getMessages')->middleware('auth');

Route::post('/contact/submit', 'MessagesController@submit');

Route::get('/logout', 'pagesController@getLogout')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('messages/submitdelet', 'MessagesController@deletMessages')->middleware('auth');
Route::get('messages/submitdelet', 'pagesController@getSubmitdelet'); //evitar acessos diretos via get na messages/submitdelete
