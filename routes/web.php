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

// Route::get('/', function () {
//     return view('front.home');
// });

Route::get('/', 'Front\HomeController@index')->name('front-home');
Route::get('/book-details', 'Front\HomeController@bookDetails')->name('front-book-details');

Route::get('/signUp', 'Front\AuthController@signUp')->name('front-signUp');
Route::post('/signUp', 'Front\AuthController@store_signUp')->name('store-front-signUp');

Route::get('/signIn', 'Front\AuthController@signIn')->name('front-signIn');
Route::post('/signIn', 'Front\AuthController@store_signIn')->name('store-front-signIn');

Route::middleware('auth')->prefix('user')->group(function(){
  Route::get('/my-page', 'User\ProfileController@index')->name('user-my-page');

  Route::get('/add-book', 'User\BookController@addNew')->name('add-new-book');

});
