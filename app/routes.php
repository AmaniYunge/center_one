<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',array('as'=>'home', 'uses'=>'HomeController@index'));

/////////// what are we routes
Route::get('/what',array('as'=>'what', 'uses'=>'HomeController@what'));


///////////who are we routes
Route::get('/who/history',array('as'=>'history', 'uses'=>'HomeController@history'));
Route::get('/who/leadership',array('as'=>'leadership', 'uses'=>'HomeController@leadership'));
Route::get('/who/staff',array('as'=>'staff', 'uses'=>'HomeController@staff'));

//////// projects routes
Route::get('/project',array('as'=>'project', 'uses'=>'HomeController@project'));
//////// work routes
Route::get('/work',array('as'=>'work', 'uses'=>'HomeController@work'));
//////// donation routes
Route::get('/donation',array('as'=>'donation', 'uses'=>'HomeController@donation'));


//////// orportunity routes
Route::get('/opportunity',array('as'=>'opportunity', 'uses'=>'HomeController@opportunity'));


//////// projects routes
Route::get('/contact',array('as'=>'project', 'uses'=>'HomeController@contact'));
Route::post('/contact',array('as'=>'project', 'uses'=>'HomeController@enquery'));


//////////////////////admin page controller
Route::get('/admin',array('as'=>'admin', 'uses'=>'AdminController@dashboard'));
Route::get('/dashboard',array('as'=>'dashboard', 'uses'=>'AdminController@dashboard'));
Route::get('/admin/homepage',array('as'=>'history', 'uses'=>'AdminController@home'));
Route::get('/admin/history',array('as'=>'history', 'uses'=>'AdminController@history'));

//////////ROUTE HANDLES ADMIN  HOME PAGE MANAGEMENT
Route::get('admin/home/list/{list_id}',array('as'=>'history', 'uses'=>'AdminOperationController@listing'));
Route::get('admin/home/form/{form_id}',array('as'=>'history', 'uses'=>'AdminOperationController@form'));
//Route::get('/admin/history',array('as'=>'history', 'uses'=>'AdminController@history'));








