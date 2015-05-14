<?php

Route::get('/', function(){
	return redirect('/post');
});

Route::get('post', 'PostController@index');

Route::get('post/create', 'PostController@create');

Route::get('post/{post}/edit', 'PostController@edit');

Route::post('post/save', 'PostController@save');

Route::get('post/{post}/delete', 'PostController@destroy');

Route::get('categoria', 'CategoriaController@index');

Route::get('categoria/{categoria}/edit', 'CategoriaController@edit');

Route::post('categoria/save', 'CategoriaController@save');

Route::get('categoria/create', 'CategoriaController@create');

Route::get('categoria/{categoria}/delete', 'CategoriaController@destroy');