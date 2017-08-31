<?php

Auth::routes();

Route::get('/', function () {
  return view('home');
});

Route::get('/posts', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');

Route::get('/about', function () {
  return view('about');
});

Route::get('/admin', 'AdminController@index')->name('admin');
Route::post('/admin', 'AdminController@add');
