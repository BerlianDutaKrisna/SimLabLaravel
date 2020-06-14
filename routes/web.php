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

Route::get('pasien','Pasien@index');
Route::get('pasien/addview','Pasien@addview');
Route::post('pasien/add','Pasien@add');
Route::get('pasien/editview/{id}','Pasien@editview');
Route::get('pasien/edit/{id}','Pasien@edit');
Route::get('pasien/delete/{id}','Pasien@delete');

