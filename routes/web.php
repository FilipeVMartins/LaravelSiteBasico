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

// rotas que retornam à view 'home'.
Route::get('/', "pagesController@getHome");
Route::get('/home', 'pagesController@getHome');

// rota que retorna à view 'about'.
Route::get('/about', "pagesController@getAbout");

// rota que retorna à view 'contact'.
Route::get('/contact', "pagesController@getContact");

// rota que retorna à view messages, invocando o método 'getMessages' do controlador 'MessagesController' que requisitará ao model 'Message' todos os registros da tabela 'messages' para serem exibidos na view retornada.
Route::get('/messages', 'MessagesController@getMessages')->middleware('auth');

// rota que retorna à view 'home' após invocar o método 'submit' do controller 'MessagesController', o qual requisitará ao model 'Message' que um novo registro seja adicionado à tabela 'messages'.
Route::post('/contact/submit', 'MessagesController@submit');

// rota que retornará a view home após fazer a requisição de logout da classe 'Auth'.
Route::get('/logout', 'pagesController@getLogout')->middleware('auth');

// autenticar rotas, laravel authentication.
Auth::routes();

// rota responsável por levar as requisições de exclusões de registros de mensagens, invocando o método 'deletMessages' do controlador 'MessagesController'.
Route::post('messages/submitdelet', 'MessagesController@deletMessages')->middleware('auth');

// rota para evitar acessos diretos via get na rota 'messages/submitdelete'(a qual só aceita post), o que geraria erro na tela do usuário, e retornando para a view 'home'.
Route::get('messages/submitdelet', 'pagesController@getSubmitdelet'); 
