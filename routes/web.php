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

// Route::get('///', function () {
//     return view('welcome');
// });
// home page
Route::get('/', function(){
    return view('frontend.user.index');
});

// show contact form
Route::get('contact', 'ContactsController@showContact')->name('contact');

//url t store d contact to db
Route::post('contact/store', 'ContactsController@storeContact')->name('store');

//newsletter
// Route::get('footer', 'NewsletterController@newsLetter');
Route::post('newsletter', 'NewsletterController@newsLetter')->name('newsletter');

// signup register
Route::get('/signup', 'RegisterController@create');
Route::post('signup/store', 'RegisterController@store')->name('sign');
