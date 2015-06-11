<?php

Route::get('/', function(){
	return redirect('/post');
});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	
]);

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

Route::get('noticia', 'PostController@noticia');

Route::get('noticia/{post}/show', 'PostController@show');

Route::post('noticia/{post}/comentar', 'ComentarioController@save');