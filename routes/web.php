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
    return view('landing');
});

Route::get('/oneway', function () {
    return view('oneway');
});
Route::get('/daybooking', function () {
    return view('daybooking');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/companysignup', 'CompanyController@signup');
Route::post('/storesignup', 'CompanyController@storesignup');
Route::get('/companysign', 'CompanyController@signin')->middleware('Usermiddleware');
Route::post('/companysign', 'CompanyController@getsignin');
Route::get('/logout', 'CompanyController@logout');
Route::post('/searchcar', 'CustomerController@searchcar');

Route::get('/order/{carnumber}/{from}/{to}', 'OrderController@orders');

Route::post('/order/{carnumber}/{from}/{to}', 'CustomerController@customersignin');
Route::post('/postorder/{carnumber}', 'OrderController@postorder');

Route::get('/makeorder/{carnumber}/{from}/{to}', 'OrderController@makeorders');
Route::get('/customersignup/{carnumber}/{from}/{to}', 'CustomerController@getsignup');
Route::post('/customersignup/{carnumber}/{from}/{to}', 'CustomerController@postsignup');

Route::get('/customerlogout', 'CustomerController@logout');










Route::get('/company/{companyname}', 'CompanyController@profile');
Route::get('/addnewcar/{companyid}/{companyname}', 'CompanyController@addnewcar');
Route::post('/addnewcar/{companyid}/{companyname}', 'CompanyController@postnewcar');
Route::get('/addnewlocation/{companyid}/{companyname}', 'CompanyController@addnewlocation');
Route::post('/addnewlocation/{companyid}/{companyname}', 'CompanyController@postnewlocation');
Route::get('/checkorders/{companyid}', 'CompanyController@checkorders');
Route::get('/bookedcars/{companyid}', 'CompanyController@bookedcars');

Route::get('/release/{carnumber}', 'CompanyController@releasecar');


Route::get('/bookorder/{carnumber}/{email}/{pickupdate}/{releasedate}', 'CompanyController@confirmorder');
Route::get('/cancelorder/{carnumber}', 'CompanyController@cancelorders');
