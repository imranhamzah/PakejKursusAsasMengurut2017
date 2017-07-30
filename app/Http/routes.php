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

Route::get('/', 'PackageListController@index');

Route::get('/student-registration','StudentRegistration@index');
Route::get('/student-registration/success','StudentRegistration@success');
Route::post('/student-registration/process','StudentRegistration@process');
Route::get('/package-list','PackageListController@index');