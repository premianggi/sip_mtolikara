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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/universitas', 'UniversitasController');
Route::resource('/korwil', 'KorwilController');
Route::resource('/pstudi', 'PstudiController');
Route::resource('/mahasiswa', 'MahasiswaController');
Route::get('/mahasiswa/pdf','MahasiswaController@createPDF');
Route::get('/mahasiswa/export','MahasiswaController@export');

Route::get('/nexmo','NexmoController@index');
Route::post('/nexmo','NexmoController@store')->name('nexmo.submit');
Route::get('/getPDF','PDFController@getPDF');