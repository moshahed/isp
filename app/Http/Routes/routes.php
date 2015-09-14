<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function(){
//    return 'Welcome to ISP';
//});
Route::get('/', 'ClientTypeController@index');
////Route::get('/', 'ClientTypeController@create');
Route::resource('client-type', 'ClientTypeController');
Route::resource('package-name', 'PackagesController');
Route::resource('main-pop', 'MainPopsController');
Route::resource('secondary-pop', 'SecondaryPopsController');

Route::get('client-name/client-package','ClientsController@clientPackage');
Route::get('client-name/client-category','ClientsController@clientCategory');
Route::resource('client-name', 'ClientsController');
Route::resource('corporate-client', 'CorporateClientsController');
Route::resource('non-corporate', 'NonCorporateClientsController');
//Route::resource('area-name', 'AreasController');
//Route::resource('area-group', 'AreaGroupsController');

//Route::get('client-type', 'ClientTypeController@index');
//Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');
//
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
