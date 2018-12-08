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


Auth::routes();

Route::get('/','JobController@showJobs')->name('home');
Route::get('/home','JobController@showJobs');
Route::resource('jobs', 'JobController');

Route::get('myannouncements', 'BusinessOwnersController@JobOffering')->name('myannouncements');


Route::resource('admins', 'AdminController',['names'=>['index'=>'adminsHome']]);

Route::get('/userManage','AdminController@userManage')->name('userManage');
Route::get('/jobManage','AdminController@jobManage')->name('jobManage');
Route::get('/jobDetails/{id}','AdminController@jobDetails');
Route::get('/jobReviewing','AdminController@jobReviewing')->name('jobReviewing');
Route::get('/jobAccept/{id}','AdminController@jobAccept');
Route::get('/jobDestroy/{id}','AdminController@jobDestroy');
Route::get('/jobSponsored','AdminController@jobSponsored')->name('jobSponsored');
Route::get('/jobNotSponsored','AdminController@jobNotSponsored')->name('jobNotSponsored');
Route::get('/Active/{id}','AdminController@Active');
Route::get('/DeActive/{id}','AdminController@DeActive');
Route::get('/SearchPanel','UserController@SearchPanel')->name('SearchPanel');
Route::any('/Search','UserController@Search')->name('Search');


