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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix'=>'mahasiswa'], function(){
    Route::get('/pendaftaran', function () {
    	return 'Halaman Pendaftaran';
	});
    Route::get('/ujian', function () {
    	return 'Halaman Ujian';
	});
    Route::get('/nilai', function () {
    	return 'Halaman Nilai';
	});
    Route::get('/nilai1', function () {
    	return 'Halaman Nilai1';
	});
});
