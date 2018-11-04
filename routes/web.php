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

Route::get('/','JobsController@showJobs')->name('home');
Route::get('job/detailes/{id}',['uses'=>'DetailsController@getJobDetailes']);
Route::get('/home','JobsController@showJobs');

Route::get('/addjob','JobsController@AddJob')->name('addjob');
Route::post('/addnewjob', 'JobsController@AddNewJob');
Route::get('/myannouncements', 'BusinessOwnersController@JobOffering');
Route::get('/anything', 'BusinessOwnersController@JobOffering');
