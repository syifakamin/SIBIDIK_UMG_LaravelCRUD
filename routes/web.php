<?php

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

//CAMABA_ROUTE
Route::GET('/camaba','CamabaController@index');
Route::GET('/camaba/create','CamabaController@create');
// Route::GET('/camaba/{id}/edit','CamabaController@edit');
Route::POST('/camaba/update/','CamabaController@update')->name('camaba.update');
Route::DELETE('/camaba/delete/{id}','CamabaController@delete')->name('camaba.delete');

//KRITERIA_ROUTE
Route::GET('/kriteria','KriteriaController@index');
Route::GET('/kriteria/create','KriteriaController@create');
Route::POST('/kriteria/update/','kriteriaController@update')->name('kriteria.update');
Route::DELETE('/kriteria/delete/{id}','kriteriaController@delete')->name('kriteria.delete');

//Route untuk login, register, logout
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/home', 'HomeController@index')->name('home');
