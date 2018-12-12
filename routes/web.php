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

// ROUTE GUESS
Route::get('', 'HomeController@index');
Route::get('login','LoginController@index');
Route::post('login','LoginController@login');
Route::get('register','UserController@create')->middleware('auth.guess'); // page ini berarti cuman bisa di akses guess
Route::post('register','UserController@store');


// ROUTE MEMBER



// ROUTE ADMIN
Route::get('thread',function(){
	return view('forum-thread');
});
Route::get('profile',function(){
    return view('member.profile-other');
});
Route::get('inbox',function(){
    return view('member.inbox');
});
Route::get('myForum',function(){
    return view('member.thread-myForum');
});
Route::get('msuser',function(){
    return view('admin.master-user');
});

Route::get('/thread/create', 'ThreadController@create');
Route::post('/thread/store', 'ThreadController@store');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/show','ThreadController@show');
