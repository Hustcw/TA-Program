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

Route::get('/','HomePageController@home');

Route::get('/users', 'UsersController@index')->name('users.index');//
Route::get('/users/{user}', 'UsersController@show')->name('users.show');//个人主页
Route::get('/users/create', 'UsersController@create')->name('users.create');//
Route::post('/users', 'UsersController@store')->name('users.store');
Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');

Route::get('/signup','UsersController@signup')->name('signup');//注册页面

Route::get('signin','SessionsController@signin')->name('signin');//登陆页面
Route::post('signin', 'SessionsController@store')->name('signin');//登陆提交
Route::delete('signout', 'SessionsController@destroy')->name('signout');//退出登录