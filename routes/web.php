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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Route::group(['prefix'=>'admin','middleware'=>['auth']],function(){

=======
Route::group(['middleware'=>['auth']], function(){
Route::prefix('admin')->group(function(){
>>>>>>> vidio eps 10
=======
Route::group(['middleware'=>['auth']], function(){
Route::prefix('admin')->group(function(){
>>>>>>> vidio eps 10
=======
Route::group(['middleware'=>['auth']], function(){
Route::prefix('admin')->group(function(){
>>>>>>> vidio eps 10
Route::get('/', function(){
		return view('admin.pages.dashboard');
	})->name('admin.home');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/* User */
	Route::prefix('user')->group(function(){

			Route::get('/','UserController@daftar')->name('admin.user')->middleware('akses.admin');
			Route::delete('/','UserController@delete')->middleware('akses.admin');

			route::get('/add','UserController@add')->name('admin.user.add')->middleware('akses.admin');
			
			route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')->middleware('akses.admin');


=======
	Route::prefix('user')->group(function(){
			Route::get('/','UserController@daftar')->name('admin.user');
>>>>>>> vidio eps 10
=======
	Route::prefix('user')->group(function(){
			Route::get('/','UserController@daftar')->name('admin.user');
>>>>>>> vidio eps 10
=======
	Route::prefix('user')->group(function(){
			Route::get('/','UserController@daftar')->name('admin.user');
>>>>>>> vidio eps 10
			Route::get('/setting','UserSettingController@form')->name('admin.user.setting');
			Route::post('/setting','UserSettingController@update');

		});
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

	/* kategori */

Route::group(['prefix'=>'kategori','middleware'=>'akses.admin'], function(){
	Route::get('/','KategoriController@daftar')->name('admin.kategori');
=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
=======
>>>>>>> vidio eps 10
	});

});


Auth::routes();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Route::any('register', function(){ return abort(404); });
=======

>>>>>>> vidio eps 10
=======

>>>>>>> vidio eps 10
=======

>>>>>>> vidio eps 10
