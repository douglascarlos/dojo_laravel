<?php

Route::get('/', function(){
	return redirect('/post');
});

Route::get('post', 'PostController@index');

Route::get('post/create', 'PostController@create');

Route::post('post/store', 'PostController@store');

Route::get('post/{post}/edit', 'PostController@edit');

Route::post('post/{post}/update', 'PostController@update');

Route::get('post/{post}/delete', 'PostController@destroy');

Route::get('categoria', 'CategoriaController@index');

Route::get('categoria/{categoria}/edit', 'CategoriaController@edit');

Route::post('categoria/{categoria}/update', 'CategoriaController@update');