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

Route::get('/','login@index');

Route::get('dasboard','Dasboard@index');

Route::get('pemeriksaan','Examination@index');
Route::get('pemeriksaan','Examination@addview');

Route::get('pasien','Pasien@index');
Route::get('pasien/addview','Pasien@addview');
Route::post('pasien/add','Pasien@add');
Route::get('pasien/editview/{no_rm}','Pasien@editview');
Route::get('pasien/edit/{no_rm}','Pasien@edit');
Route::get('pasien/delete/{no_rm}','Pasien@delete');

