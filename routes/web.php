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

Route::get('/','HomePageController@home')->name('homepage');

Route::resource('/users', ['users'=>'UsersController','https']);
Route::get('/signup',['users'=>'UsersController@create','https'])->name('signup');//注册页面
Route::post('/users/{users}/addcourse',['users'=>'CourseUsersController@store','https'])->name('add.course');

/*
Route::get('/users', 'UsersController@index')->name('users.index');//
Route::get('/users/{users}', 'UsersController@show')->name('users.show');//个人主页
Route::get('/users/create', 'UsersController@create')->name('users.create');//注册页面
Route::post('/users', 'UsersController@store')->name('users.store');//注册处理
Route::get('/users/{users}/edit', 'UsersController@edit')->name('users.edit');//编辑个人信息页面
Route::patch('/users/{users}', 'UsersController@update')->name('users.update');//更新个人信息处理
Route::delete('/users/{users}', 'UsersController@destroy')->name('users.destroy');
*/

Route::get('/signin',['users'=>'SessionsController@signin','https'])->name('signin');//登陆页面
Route::post('/signin', ['users'=>'SessionsController@store','https'])->name('signin');//登陆提交
Route::delete('signout', ['users'=>'SessionsController@destroy','https'])->name('signout');//退出登录


Route::get('signup/confirm/{token}', ['users'=>'UsersController@confirmEmail','https'])->name('confirm_email');//邮箱激活


Route::post('/courses/{users}', ['users'=>'CoursesController@bindcourse','https'])->name('courses.store');//提交课程信息处理



Route::get('/users/{users}/tasks',['users'=>'TasksController@show','https'])->name('tasks.show');//显示任务发布页面
Route::post('/tasks/{users}',['users'=>'TasksController@addtask','https'])->name('tasks.store');//添加新的任务到数据库
Route::get('users/{users}/courses/{courses}/tasks',['users'=>'TasksController@stshow','https'])->name('tasks.stshow');//学生查询成绩页面

