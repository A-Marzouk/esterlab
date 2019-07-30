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



Route::get('/green-energy/{lang?}','HomeController@showGreenEnergyPage');
Route::get('/electric-bus/{lang?}','HomeController@showElectricBusPage');
Route::get('/math-modeling/{lang?}','HomeController@showMathModelingPage');
Route::get('/{lang?}','HomeController@index');
