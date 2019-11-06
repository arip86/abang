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
Route::get('/hello', function(){
	return view ('welcome');
});

Route::get('/siswa/exportexcel', 'SiswaController@exportexcel');
Route::get('siswa/exportpdf', 'SiswaController@exportPdf');
Route::get('/', 'SiteController@home');
Route::get('/register', 'SiteController@register');
Route::post('/postregister', 'SiteController@postregister');

Route::get('/about', 'SiteController@about');
Route::get('/login', 'AuthController@login')->name('login');
Route::get('/logout', 'AuthController@logout');
Route::post('/postlogin', 'AuthController@postlogin');


Route::group(['middleware' => ['auth', 'checkRole:admin']], function(){
Route::get('/siswa', 'SiswaController@index');
Route::post('/siswa/create', 'SiswaController@create');
Route::get('/siswa/{id}/edit', 'SiswaController@edit');
Route::post('/siswa/{id}/update', 'SiswaController@update');
Route::get('/siswa/{id}/delete', 'SiswaController@delete');

});
Route::group(['middleware' => ['auth', 'checkRole:admin,siswa']], function(){
Route::get('/dashboard', 'DashboardController@index');
});