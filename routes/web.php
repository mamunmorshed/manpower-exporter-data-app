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

// Auth::routes();
Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::get('/home', 'HomeController@index');
// Route::get('/home', function(){
// 	return view('landing');
// });

Route::group(['middleware' => 'auth'],function(){

	Route::get('/workers', function(){
		return view('worker.list');
	});
	Route::get('/worker/new', function(){
		return view('worker.new');
	});
	Route::get('/worker/input/new', function(){
		return view('worker.input');
	});
	Route::get('/worker/report/new', function(){
		return view('worker.report');
	});
	Route::get('/worker/edit/{id}', function($id){
		return view('worker.edit');
	});
	Route::get('/worker/view/{id}', function($id){
		return view('worker.view');
	});


	Route::get('/agents', function(){
		return view('agent.list');
	});
	Route::get('/agent/new', function(){
		return view('agent.new');
	});
	Route::get('/agent/edit/{id}', function($id){
		return view('agent.edit');
	});
	Route::get('/agent/view/{id}', function($id){
		return view('agent.view');
	});


	Route::get('/agents/accounts', function(){
		return view('agent.account.list');
	});
	Route::get('/agent/account/new', function(){
		return view('agent.account.new');
	});
	Route::get('/agent/account/edit/{id}', function($id){
		return view('agent.account.edit');
	});
	Route::get('/agent/account/view/{id}', function($id){
		return view('agent.account.view');
	});

});