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
Route::get('/JSArrays', 'PagesController@JSArrays')->name('PagesController.JSArrays');
Route::get('/imageGalery', 'PagesController@imageGalery')->name('PagesController.imageGalery');
Route::get('/typeAheadFeature', 'PagesController@typeAheadFeature')->name('PagesController.typeAheadFeature');
Route::get('/JSArrays2', 'PagesController@JSArrays2')->name('PagesController.JSArrays2');
Route::get('/canvas', 'PagesController@canvas')->name('PagesController.canvas');
Route::get('/tricks', 'PagesController@tricks')->name('PagesController.tricks');
Route::get('/checkBoxes', 'PagesController@checkBoxes')->name('PagesController.checkBoxes');
Route::get('/videoPlayer', 'PagesController@videoPlayer')->name('PagesController.videoPlayer');
Route::get('/konamiCode', 'PagesController@konamiCode')->name('PagesController.konamiCode');
Route::get('/slider', 'PagesController@slider')->name('PagesController.slider');
Route::get('/objectandarrays', 'PagesController@objectandarrays')->name('PagesController.objectandarrays');
Route::get('/localstorage', 'PagesController@localstorage')->name('PagesController.localstorage');
Route::get('/textShadowEffect', 'PagesController@textShadowEffect')->name('PagesController.textShadowEffect');
Route::get('/sorting', 'PagesController@sorting')->name('PagesController.sorting');


Route::get('/30daysJSchallange', 'PagesController@thirtydaysJSchallange')->name('PagesController.thirtydaysJSchallange');
Route::get('/threejs', 'ThreejsController@threejs')->name('ThreejsController.threejs');