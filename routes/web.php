<?php

use App\hasil_perhitungan;
use Illuminate\Support\Facades\Route;

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
    return view('/auth/login');
});

//USER_ROUTE
Route::GET('/user','UserController@index');
Route::POST('/user/create','UserController@create');
Route::POST('/user/update/','UserController@update')->name('user.update');
Route::DELETE('/user/delete/{id}','UserController@delete')->name('user.delete');

//CAMABA_ROUTE
Route::GET('/camaba','CamabaController@index');
Route::POST('/camaba/create','CamabaController@create');
Route::POST('/camaba/update/','CamabaController@update')->name('camaba.update');
Route::DELETE('/camaba/delete/{id}','CamabaController@delete')->name('camaba.delete');

//KRITERIA_ROUTE
Route::GET('/kriteria','KriteriaController@index');
Route::POST('/kriteria/create','KriteriaController@create');
Route::POST('/kriteria/update/','kriteriaController@update')->name('kriteria.update');
Route::DELETE('/kriteria/delete/{id}','kriteriaController@delete')->name('kriteria.delete');

//HASIL_PERHITUNGAN_ROUTE
Route::GET('/hasil_perhitungan','hasilPerhitunganController@index');
Route::POST('/hasil_perhitungan/create','hasilPerhitunganController@create');
Route::POST('/hasil_perhitungan/update','hasilPerhitunganController@update')->name('hasil_perhitungan.update');
Route::DELETE('/hasil_perhitungan/delete/{id}','hasilPerhitunganController@delete')->name('hasil_perhitungan.delete');

//WASPAS_ROUTE
Route::GET('/waspas','waspasController@index');

//DETAIL_WASPAS_ROUTE
Route::GET('/detail_waspas','waspasController@waspas');

Route::get('/waspas/cetak', 'waspasController@cetakPDF');

//Route untuk login, register, logout
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
