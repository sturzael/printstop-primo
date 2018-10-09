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



Auth::routes();


/*
|--------------------------------------------------------------------------
| Redirect the following routes to login if not auth
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'contactController@index')->name('contact');
// Route::group( ['middleware' => 'auth' ], function()
// {
//
// });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
