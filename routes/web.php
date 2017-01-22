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

	Route::get('/workers', 'WorkerController@index');
	Route::get('/workers/new', function(){
		return view('worker.new');
	});
	Route::post('/workers/new', 'WorkerController@store');
	
	Route::get('/workers/new/input', function(){
		return view('worker.input');
	});
	Route::get('/workers/new/report', function(){
		return view('worker.report');
	});
	Route::get('/workers/{id}/edit', function($id){
		return view('worker.edit');
	});
	Route::get('/workers/{id}', 'WorkerController@show');


	Route::get('/agents', function(){
		return view('agent.list');
	});
	Route::get('/agents/new', function(){
		return view('agent.new');
	});
	Route::get('/agents/{id}/edit', function($id){
		return view('agent.edit');
	});
	Route::get('/agents/{id}/view', function($id){
		return view('agent.view');
	});


	Route::get('/agents/accounts', function(){
		return view('agent.account.list');
	});
	Route::get('/agents/accounts/new', function(){
		return view('agent.account.new');
	});
	Route::get('/agents/accounts/{id}/edit', function($id){
		return view('agent.account.edit');
	});
	Route::get('/agents/accounts/{id}/view', function($id){
		return view('agent.account.view');
	});

});