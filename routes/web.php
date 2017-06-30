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

// Static pages served to client

Route::get('/', 'PagesController@getIndex')->name('index');

Route::get('portfolio', 'PagesController@getPortfolio')->name('portfolio');

Route::get('about', 'PagesController@getAbout')->name('about');

Route::get('contact', 'PagesController@getContact')->name('contact');

Route::post('contact', 'PagesController@postContact');

Route::get('sitemap.xml', function() {
   return File::get(public_path() . '\sitemap.xml');
});


//Auth routes pertaining to User Dashboard

Auth::routes();

Route::get('home', 'HomeController@getIndex')->name('home');
Route::get('logout', 'HomeController@getLogout')->name('logout');


//Photo Routes pertaining to Uploading images

Route::get('photo', 'PhotoController@getIndex')->name('photo')->middleware('auth');
Route::get('photo/{photo}', 'PhotoController@show')->middleware('auth');


// Album Routes
Route::get('album/{album}', 'AlbumController@show')->middleware('auth');


