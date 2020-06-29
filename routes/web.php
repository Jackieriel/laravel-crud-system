<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PostController@view')->name('view');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
  Route::get('/dashboard', 'PostController@dashboard')->name('dashboard');
  Route::resource('/post', 'PostController');
  // Route::resource('/post.create', 'PostController@create');
  // Route::get('/post/{post}', 'PostController@edit');
  // Route::get('/edit', 'PostController@edit');

});

Auth::routes();

// Route::get('/home', 'PostController@home')->name('home');
