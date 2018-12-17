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
Route::get('register','UserController@create')->middleware('auth.guess');
Route::post('register','UserController@store')->middleware('auth.guess');
Route::get('thread/{id}','ThreadController@threadShow')->middleware('auth.guess');
// ROUTE MEMBER
Route::get('member/', 'HomeController@indexMember')->middleware('auth.member');
Route::post('member/','HomeController@index')->middleware('auth.member');
Route::get('member/thread-create', 'ThreadController@create')->middleware('auth.member');
Route::post('member/thread-store', 'ThreadController@store')->middleware('auth.member');
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
Route::post('member/thread-delete-post','ThreadController@deletePost')->middleware('auth.member');
Route::get('member/thread-edit-post/{id}','ThreadController@editPostview')->middleware('auth.member');
Route::post('member/thread-edit-post','ThreadController@editPost')->middleware('auth.member');
Route::post('member/give-rating','UserController@giveReputation')->middleware('auth.member');
Route::get('member/myforum','ThreadController@getMyThread')->middleware('auth.member');
Route::get('member/thread-update/{id}','ThreadController@editThreadView')->middleware('auth.member');
Route::post('member/thread-update','ThreadController@editThread')->middleware('auth.member');
Route::post('member/thread-close','ThreadController@closeThread')->middleware('auth.member');
// ROUTE ADMIN
Route::get('admin/', 'HomeController@indexmember')->middleware('auth.admin');
Route::get('admin/thread-create', 'ThreadController@create')->middleware('auth.admin');
Route::post('admin/thread-store', 'ThreadController@store')->middleware('auth.admin');
Route::get('admin/profile/{id}', 'UserController@viewProfile')->middleware('auth.admin');
Route::get('admin/profile-update', 'UserController@viewSelfEdit')->middleware('auth.admin');
Route::post('admin/profile-update', 'UserController@postSelfEdit')->middleware('auth.admin');
Route::get('admin/inbox', 'UserController@showInbox')->middleware('auth.admin');
Route::post('admin/send-message', 'UserController@sendMessage')->middleware('auth.admin');
Route::post('admin/delete-message', 'UserController@deleteMessage')->middleware('auth.admin');
Route::get('admin/thread/{id}','ThreadController@threadShow')->middleware('auth.admin');
Route::get('admin/thread/{id}/{keyword}','ThreadController@threadShowWithFilter')->middleware('auth.admin');
Route::post('admin/thread','ThreadController@redirectToFilter')->middleware('auth.admin');
Route::post('admin/thread-add-post','ThreadController@addPost')->middleware('auth.admin');
Route::post('admin/thread-delete-post','ThreadController@deletePost')->middleware('auth.admin');
Route::get('admin/thread-edit-post/{id}','ThreadController@editPostview')->middleware('auth.admin');
Route::post('admin/thread-edit-post','ThreadController@editPost')->middleware('auth.admin');
Route::post('admin/give-rating','UserController@giveReputation')->middleware('auth.admin');
Route::get('admin/myforum','ThreadController@getMyThread')->middleware('auth.admin');
Route::get('admin/thread-update/{id}','ThreadController@editThreadView')->middleware('auth.admin');
Route::post('admin/thread-update','ThreadController@editThread')->middleware('auth.admin');
Route::post('admin/thread-close','ThreadController@closeThread')->middleware('auth.admin');
Route::get('/msuser','MasterController@index')->middleware('auth.admin');
Route::get('/msuser/create','MasterController@create')->middleware('auth.admin');
Route::post('/msuser/store','MasterController@store')->middleware('auth.admin');
Route::get('/msuser/edit/{id}','MasterController@edit')->middleware('auth.admin');
Route::put('/msuser/update/{id}','MasterController@update')->middleware('auth.admin');
Route::delete('/msuser/delete/{id}','MasterController@destroy')->middleware('auth.admin');
Route::get('/msthread','MasterThreadController@index')->middleware('auth.admin');
Route::get('/mscategory','MasterThreadController@categoryindex')->middleware('auth.admin');
Route::post('/mscategory/store','MasterThreadController@categorystore')->middleware('auth.admin');
Route::get('/mscategory/edit/{id}','MasterThreadController@categoryedit')->middleware('auth.admin');
Route::put('/mscategory/update/{id}','MasterThreadController@categoryupdate')->middleware('auth.admin');
Route::delete('/mscategory/delete/{id}','MasterThreadController@categorydelete')->middleware('auth.admin');
Route::get('/thread/create', 'ThreadController@create')->middleware('auth.admin');
Route::post('/thread/store', 'ThreadController@store')->middleware('auth.admin');
