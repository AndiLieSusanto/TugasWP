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
Route::get('thread/{id}','ThreadController@threadShow')->middleware('auth.guess');
// ROUTE MEMBER

Route::get('member/', 'HomeController@indexMember')->middleware('auth.member');
Route::get('member/thread/create', 'ThreadController@create')->middleware('auth.member');
Route::get('member/profile/{id}', 'UserController@viewProfile')->middleware('auth.member');
Route::get('member/profile-update', 'UserController@viewSelfEdit')->middleware('auth.member');
Route::post('member/profile-update', 'UserController@postSelfEdit')->middleware('auth.member');
Route::get('member/inbox', 'UserController@showInbox')->middleware('auth.member');
Route::post('member/send-message', 'UserController@sendMessage')->middleware('auth.member');
Route::post('member/delete-message', 'UserController@deleteMessage')->middleware('auth.member');
Route::get('member/thread/{id}','ThreadController@threadShow')->middleware('auth.member');
Route::get('member/thread/{id}/{keyword}','ThreadController@threadShowWithFilter')->middleware('auth.member');
Route::post('member/thread','ThreadController@redirectToFilter')->middleware('auth.member');
Route::post('member/thread-add-post','ThreadController@addPost')->middleware('auth.member');
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

//ROUTE ADMIN USER
Route::get('/msuser','MasterController@index');
Route::get('/msuser/create','MasterController@create');
Route::post('/msuser/store','MasterController@store');
Route::get('/msuser/edit/{id}','MasterController@edit');
Route::put('/msuser/update/{id}','MasterController@update');
Route::delete('/msuser/delete/{id}','MasterController@destroy');

//ROUTE ADMIN THREAD
Route::get('/msthread','MasterThreadController@index');
Route::get('/mscategory','MasterThreadController@categoryindex');
Route::post('/mscategory/store','MasterThreadController@categorystore');
Route::get('/mscategory/edit/{id}','MasterThreadController@categoryedit');
Route::put('/mscategory/update/{id}','MasterThreadController@categoryupdate');
Route::delete('/mscategory/delete/{id}','MasterThreadController@categorydelete');

Route::get('/thread/create', 'ThreadController@create');
Route::post('/thread/store', 'ThreadController@store');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/show','ThreadController@show');
