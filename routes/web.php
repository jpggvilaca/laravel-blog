<?php

Auth::routes();

// Frontend
Route::get('/', function () {
  return view('home');
});

Route::get('/posts/{category}', 'PostsController@list');
Route::get('/posts/{category}/{post}', 'PostsController@show');

Route::get('/about', function () {
  return view('about');
});

// Backend
Route::get('/admin', 'AdminController@index')->name('admin');
Route::post('/admin', 'AdminController@add');
