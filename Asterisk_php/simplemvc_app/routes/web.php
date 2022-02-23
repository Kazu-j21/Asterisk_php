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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/books/create', 'BookController@create');
Route::post('/books/new', 'BookController@store');
Route::get('/books', 'BookController@index');
// {id} is a wildcard=>because it can have any value
Route::get('/books/{id}', 'BookController@shw');
Route::get('/books/{id}/edit', 'BookController@edit');
Route::post('/books/{id}/update', 'BookController@update');
Route::get('/books/{id}/delete', 'BookController@delete');
