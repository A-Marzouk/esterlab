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


// user agreements and policies
Route::get('/user-agreement','HomeController@userAgreementPage')->name('user.agreement');
Route::get('/privacy-policy','HomeController@privacyPolicyPage')->name('privacy.policy');
Route::get('/cookie-policy','HomeController@cookiePolicyPage')->name('cookie.policy');

// main pages

Route::get('/green-energy/{lang?}','HomeController@showGreenEnergyPage')->name('green.energy');
Route::get('/electric-bus/{lang?}','HomeController@showElectricBusPage')->name('electric.bus');
Route::get('/math-modeling/{lang?}','HomeController@showMathModelingPage')->name('math.modeling'); // ? sign to make it optional
Route::get('/scientific-publications/{lang?}','HomeController@showScientificPublicationsPage')->name('scientific.publication');
Route::get('/designing-mechanisms/{lang?}','HomeController@showDesigningMechanismsPage')->name('designing.mechanisms');
Route::get('/expertise-of-mechanisms/{lang?}','HomeController@showExpertiseOfMechanismsPage')->name('expertise.of.mechanisms');
Route::get('/technical-development/{lang?}','HomeController@showTechnicalDevelopmentPage')->name('technical.development');
// join us
Route::get('/join/{lang?}','HomeController@joinPage')->name('join.page');
Route::get('/{lang?}','HomeController@index')->name('home');


// register



Route::get('/language/switch/{lang}','HomeController@switchLanguage')->name('switch.language');
Route::get('/language/get/current','HomeController@getCurrentLanguage')->name('get.language');

// contact-us:
Route::post('/contact-us/submit','ContactUsController@submitContactForm')->name('contact.submit');
Route::get('/contact-us/submit/successful','ContactUsController@successful')->name('contact.submit');
Route::get('/client/geo','HomeController@getClientGEO');


// download pdf file :
Route::get('/scientific-publications/download/pdf','HomeController@getDownload')->name('download.scientific.pdf');



