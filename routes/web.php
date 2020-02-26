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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Post
Route::get('/post', 'PostController@index')->name('post');
Route::get('/post/add', 'PostController@create')->name('addPost')->middleware('permission:write post');
Route::get('/post/edit', 'PostController@edit')->name('editPost')->middleware('permission:edit post');

//Role And Permission
Route::get('/role', 'HomeController@role');
Route::get('/permission', 'HomeController@permission');
Route::get('/assign/role', 'HomeController@assignrole');
Route::get('/assign/permission', 'HomeController@assignpermission');
Route::get('userstatus', 'HomeController@status');
