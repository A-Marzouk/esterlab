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



Route::get('/','HomeController@index');
Route::get('/{lang}','HomeController@index');
Route::get('/green-energy','HomeController@showGreenEnergyPage');
Route::get('/electric-bus','HomeController@showElectricBusPage');
Route::get('/math-modeling','HomeController@showMathModelingPage');