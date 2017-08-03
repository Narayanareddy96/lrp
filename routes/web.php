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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
// this is for main
Route::get('personaldata','GeneralInfoController@personaldata')->name('personaldata');
Route::post('personaldata','GeneralInfoController@personaldata_insert')->name('personaldata_insert');

Route::get('/home', 'HomeController@index')->name('home');
