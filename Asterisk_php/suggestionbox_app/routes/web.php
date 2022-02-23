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
Route::get('/', function(){
    return redirect()->route('suggestions.create');
});
Route::get('/suggestions/create', 'SuggestionController@create')->name('suggestions.create');
Route::post('/suggestions/new', 'SuggestionController@store')->name('suggestions.store');
Route::get('/suggestions/index', 'SuggestionController@index')->name('suggestions.index');
Route::get('/suggestions/{id}/edit', 'SuggestionController@edit')->name('suggestions.edit');
Route::patch('/suggestions/{id}/update', 'SuggestionController@update')->name('suggestions.update');
Route::delete('/suggestions/{id}/delete', 'SuggestionController@delete')->name('suggestions.delete');
Route::get('suggestions/{suggestion_id}/upvote', 'SuggestionController@upvote')->name('upvote');
Route::delete('suggestions/{suggestion_id}/downvote', 'SuggestionController@downvote')->name('downvote');