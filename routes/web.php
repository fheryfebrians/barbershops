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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'BarberController@menuUtama');
Route::get('/about', 'BarberController@showAbout');
Route::get('/staff', 'BarberController@showStaff');
Route::get('/contact', 'BarberController@showContact');
Route::get('/galeri', 'BarberController@showGaleri');
Route::get('/service', 'BarberController@showService');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// booking
Route::get('/booking', 'BookingController@showBook');
Route::post('/booking', 'BookingController@postBook');


//admin
Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth']], function(){
	Route::get('/', 'admin\HomeController@showHome');
	// Route::get('/capster', 'admin\HomeController@showCapster');
	// Route::get('/newcapster', 'admin\HomeController@newCapster');
	// Route::post('/newcapster', 'admin\HomeController@postCapster');
	Route::get('/user', 'admin\HomeController@showUser');
	Route::get('/newuser', 'admin\HomeController@newuser');
	Route::post('/newuser', 'admin\HomeController@postUser');
	Route::get('/barang', 'admin\HomeController@showBarang');
	Route::get('/newbarang', 'admin\HomeController@newBarang');
	Route::post('/newbarang', 'admin\HomeController@postBarang');
	Route::get('/book', 'admin\HomeController@showBook');
	Route::get('/panggilan', 'admin\HomeController@showPanggilan');
	Route::get('/newpanggilan', 'admin\HomeController@newPanggilan');
	Route::post('/newpanggilan', 'admin\HomeController@postPanggilan');
	Route::get('/galeri', 'admin\HomeController@newGaleri');
	Route::post('/galeri', 'admin\HomeController@postGaleri');
	Route::get('/bayar/{id}', 'admin\HomeController@showBayar');
	Route::post('/bayar/{id}', 'admin\HomeController@postBayar');
	Route::get('/print/{id}', 'admin\HomeController@printPdf');
});


Route::group(['prefix' => 'administrator'], function(){
	Route::get('/', 'AdministratorController@index')->name('administrator.home');
	Route::get('/login', 'AuthAdministrator\LoginController@showLogin')->name('administrator.login');
	Route::post('/login', 'AuthAdministrator\LoginController@login')->name('administrator.login.submit');
	Route::post('/logout', 'AuthAdministrator\LoginController@logout');
	Route::get('/user', 'AdministratorController@showUser')->name('administrator.user');
	Route::get('/karyawan', 'AdministratorController@showKaryawan');
	Route::get('/newkaryawan', 'AdministratorController@newKaryawan');
	Route::post('/newkaryawan', 'AdministratorController@postKaryawan');
	Route::get('/detailkaryawan/{id}', 'AdministratorController@detailKaryawan');
	Route::get('/editkaryawan/{id}', 'AdministratorController@editKaryawan');
	Route::patch('/updatekaryawan/{id}', 'AdministratorController@updateKaryawan');
	Route::get('/barang', 'AdministratorController@showBarang');
	Route::get('/transaksi', 'AdministratorController@showTransaksi');
	Route::get('/print/{id}', 'AdministratorController@printPdf');
	Route::get('/capster', 'AdministratorController@showCapster');
	Route::get('/newcapster', 'AdministratorController@newCapster');
	Route::post('/newcapster', 'AdministratorController@postCapster');
});