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
//Navber Route
Route::get('/','PageController@index')->name('index')->middleware('verified');
Route::get('/about','PageController@about')->name('about');
Route::get('/contact','PageController@contuct')->name('contact');
Route::get('/advertisement','PageController@advertisement')->name('advertisement');

// Sidebar Route
Route::get('/sports','PageController@sports')->name('sports');
Route::get('/international','PageController@international')->name('international');
Route::get('/business','PageController@business')->name('business');
Route::get('/bangladesh','PageController@bangladesh')->name('bangladesh');
Route::get('/Political','PageController@Political')->name('Political');
Route::get('/ad','PageController@ad')->name('ad');
Route::get('/binodon','PageController@binodon')->name('binodon');
Route::get('/campus','PageController@campus')->name('campus');
Route::get('/city','PageController@city')->name('city');
Route::get('/agriculture','PageController@agriculture')->name('agriculture');



/*Search button route*/
 Route::get('/search','PageController@search')->name('search');


Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');
Auth::routes(['verify' => true]);

Route::get('/imageup', 'NewsimageController@image');
Route::get('/imageZoom', 'NewsimageController@imageZoom');
Route::post('/saveimg', 'NewsimageController@saveimg');
Route::get('/allimage', 'NewsimageController@allimage');
Route::get('/home', 'PageController@index')->name('home')->middleware('verified');
Route::get('/postnews', 'HomeController@postNews')->middleware('verified');
Route::post('newssave', 'HomeController@saveNews')->middleware('verified');
Route::get('allpost', 'HomeController@allPost')->middleware('verified');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/admin', 'HomeController@admin')->name('admin')->middleware('verified');
Route::get('builder', 'HomeController@getBuilder')->name('builder');
Route::post('imageupload', 'HomeController@imageUpload');

