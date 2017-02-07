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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'HomeController@index');

// Auth::routes();
//Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
//Route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
//Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);


//Route::group(['middleware' => 'auth'],function(){

    Route::get('/home', 'HomeController@index');

    Route::get('/workers', 'WorkerController@index');
	Route::get('/workers/new', 'WorkerController@create');
	Route::post('/workers/new', 'WorkerController@store');
	Route::get('/workers/new/input', 'WorkerController@createInput');
	Route::patch('/workers/new/input', 'WorkerController@input');
	Route::get('/workers/new/report', 'WorkerController@createReport');
	Route::patch('/workers/new/report', 'WorkerController@report');
	Route::get('/workers/{id}/edit', 'WorkerController@edit');
	Route::patch('/workers/{id}/edit', 'WorkerController@update');
	Route::get('/workers/{id}', 'WorkerController@show');
	Route::get('/workers/{id}/json', 'WorkerController@showJSON');
	// Route::delete('/workers/{id}/destroy', 'WorkerController@destroy');

	Route::get('/agents/accounts/', 'AccountController@index');
	Route::get('/agents/accounts/new', 'AccountController@create');
	Route::post('/agents/accounts/new', 'AccountController@store');
	// Route::get('/agents/accounts/{id}/edit', 'AccountController@edit');
	// Route::patch('/agents/accounts/{id}/edit', 'AccountController@update');
	Route::get('/agents/accounts/{id}/view',  'AccountController@view');

	Route::get('/agents', 'AgentController@index');
	Route::get('/agents/new', 'AgentController@create');
	Route::post('/agents/new', 'AgentController@store');
	Route::get('/agents/{id}/edit','AgentController@edit');
	Route::patch('/agents/{id}/edit','AgentController@update');
	Route::get('/agents/{id}', 'AgentController@show');
	Route::get('/agents/{id}/json', 'AgentController@showJSON');


//});
