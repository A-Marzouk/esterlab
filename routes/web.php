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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;





Route::get('/green-energy/{lang?}','HomeController@showGreenEnergyPage')->name('green.energy');
Route::get('/electric-bus/{lang?}','HomeController@showElectricBusPage')->name('electric.bus');
Route::get('/math-modeling/{lang?}','HomeController@showMathModelingPage')->name('math.modeling'); // ? sign to make it optional
Route::get('/scientific-publications/{lang?}','HomeController@showScientificPublicationsPage')->name('scientific.publication');
Route::get('/{lang?}','HomeController@index')->name('home');

Route::get('/language/switch/{lang}','HomeController@switchLanguage')->name('switch.language');
Route::get('/language/get/current','HomeController@getCurrentLanguage')->name('get.language');

// contactus:
Route::post('/contact-us/submit','ContactUsController@submitContactForm')->name('contact.submit');
Route::get('/contact-us/submit/successful','ContactUsController@successful')->name('contact.submit');

// download pdf file :
Route::get('/scientific-publications/download/pdf','HomeController@getDownload')->name('download.scientific.pdf');


// test route
Route::get('/client/geo','HomeController@getClientGEO');

