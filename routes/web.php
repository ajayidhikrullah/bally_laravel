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
// signup
Route::get('signup', function(){
    return view('frontend.user.signup');
});

// show contact form
Route::get('contact', 'ContactsController@showContact')->name('contact');
//create the contacts URL
// Route::get('/contact/create', 'ContactsController@createContact');
//url t store d contact to db
Route::post('contact/store', 'ContactsController@storeContact')->name('store');

//newsletter
Route::post('newsletter', 'ContactsController@newsletter');

