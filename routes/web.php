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
Route::get("/new", function(){
  return view('front.newBook');
});

Route::get('/', 'Front\HomeController@index')->name('front-home');
Route::get('/book-details', 'Front\HomeController@bookDetails')->name('front-book-details');

Route::get('/signUp', 'Front\AuthController@signUp')->name('front-signUp');
Route::post('/signUp', 'Front\AuthController@store_signUp')->name('store-front-signUp');

Route::get('/signIn', 'Front\AuthController@signIn')->name('front-signIn');
Route::post('/signIn', 'Front\AuthController@store_signIn')->name('store-front-signIn');
Route::get('/sign-out', 'Front\AuthController@logout')->name('user-logout');

Route::middleware('auth')->prefix('user')->group(function(){

  Route::get('/my-page', 'User\ProfileController@index')->name('user-my-page');

  Route::get('/add-book', 'User\BookController@addNew')->name('add-new-book');
  Route::post('/add-book', 'User\BookController@storeBook')->name('store-new-book');
  Route::get('/edit-book/{title}/{id}', 'User\BookController@showEditPage')->name('user-edit-book');
  Route::post('/edit-book', 'User\BookController@storeEditBook')->name('store-user-edit-book');

  Route::get('/category', 'User\ProfileController@get_book_by_category')->name('book-by-category');
  Route::get('/delete', 'User\BookController@delete')->name('book-delete');



});
