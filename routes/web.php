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

Auth::routes();

Route::get('/','HomeController@Home');
Route::get('/checkstatus','HomeController@checkStatus')->name('checkStatus');
Route::get('/check','HomeController@check')->name('check');
Route::get('/faq','HomeController@faq');
Route::get('/register','HomeController@Register');
Route::get('/register/all','HomeController@ListRegister');
Route::post('/register/submit', 'HomeController@SubmitRegister')->name('submitRegister');
Route::get('/register/success', 'HomeController@RegisterSuccess')->name('RegisterSuccess');


Route::prefix('admin')->group(function(){
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/','AdminController@index')->name('admin.dashboard');
});




