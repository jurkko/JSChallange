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
    return view('welcome');
});

Route::get('/piano', 'PagesController@piano')->name('PagesController.piano');
Route::get('/clock', 'PagesController@clock')->name('PagesController.clock');
Route::get('/variables', 'PagesController@variables')->name('PagesController.variables');

Route::get('/30daysJSchallange', 'PagesController@thirtydaysJSchallange')->name('PagesController.thirtydaysJSchallange');