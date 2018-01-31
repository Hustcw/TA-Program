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

Route::resource('/users', 'UsersController');
Route::get('/signup','UsersController@create')->name('signup');//注册页面
Route::post('/users/{users}/addcourse','CourseUsersController@store')->name('add.course');

/*
Route::get('/users', 'UsersController@index')->name('users.index');//
Route::get('/users/{users}', 'UsersController@show')->name('users.show');//个人主页
Route::get('/users/create', 'UsersController@create')->name('users.create');//注册页面
Route::post('/users', 'UsersController@store')->name('users.store');//注册处理
Route::get('/users/{users}/edit', 'UsersController@edit')->name('users.edit');//编辑个人信息页面
Route::patch('/users/{users}', 'UsersController@update')->name('users.update');//更新个人信息处理
Route::delete('/users/{users}', 'UsersController@destroy')->name('users.destroy');
*/

Route::get('/signin','SessionsController@signin')->name('signin');//登陆页面
Route::post('/signin', 'SessionsController@store')->name('signin');//登陆提交
Route::delete('signout', 'SessionsController@destroy')->name('signout');//退出登录


Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');//邮箱激活


Route::post('/courses/{users}', 'CoursesController@bindcourse')->name('courses.store');//提交课程信息处理



Route::get('/users/{users}/tasks','TasksController@show')->name('tasks.show');//显示任务发布页面
Route::post('/tasks/{users}','TasksController@addtask')->name('tasks.store');//添加新的任务到数据库
Route::get('users/{users}/courses/{courses}/tasks','TasksController@stshow')->name('tasks.stshow');//学生查询成绩页面

