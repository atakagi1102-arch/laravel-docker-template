<?php


Route::get('/todo/create', 'TodoController@create')->name('todo.create'); 
Route::post('/todo', 'TodoController@store')->name('todo.store');
Route::get('/todo', 'TodoController@index')->name('todo.index'); 
Route::get('/todo/{id}', 'TodoController@show')->name('todo.show');