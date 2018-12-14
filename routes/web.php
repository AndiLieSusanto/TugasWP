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
//global
Route::get('logout', 'UserController@logout');

// ROUTE GUESS
Route::get('', 'HomeController@index')->middleware('auth.guess');
Route::get('login','LoginController@index')->middleware('auth.guess');
Route::post('login','LoginController@login')->middleware('auth.guess');
Route::get('register','UserController@create')->middleware('auth.guess'); // page ini berarti cuman bisa di akses guess
Route::post('register','UserController@store')->middleware('auth.guess');

// ROUTE MEMBER
Route::get('member/', 'HomeController@indexMember')->middleware('auth.member');
Route::get('member/thread/create', 'ThreadController@create')->middleware('auth.member');
Route::get('member/profile/', function(){
    return view('member.profile');
})->middleware('auth.member');
// ROUTE ADMIN
Route::get('admin/', 'HomeController@indexMember')->middleware('auth.admin');










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

Route::get('/msUser','MasterController@index');
Route::get('/msUser/create','MasterController@create');
Route::post('/msUser/store','MasterController@store');
Route::get('/msUser/edit/{id}','MasterController@edit');
Route::put('/msUser/update/{id}','MasterController@update');

Route::get('/thread/create', 'ThreadController@create');
Route::post('/thread/store', 'ThreadController@store');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/show','ThreadController@show');
