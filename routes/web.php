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

Route::get('/','HomeController@Home');
Route::get('/register','HomeController@Register');
Route::get('/register/all','HomeController@ListRegister');
Route::post('/register/submit', 'HomeController@SubmitRegister')->name('submitRegister');
Route::get('/register/success', 'HomeController@RegisterSuccess')->name('RegisterSuccess');
