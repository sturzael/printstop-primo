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

Route::group(['prefix' => 'dashboard'], function () {
    Voyager::routes();

});

Route::get('/', function () {
  Auth::routes();
    if(Auth::check()) {
        return redirect('/dashboard');
    } else {
        return View('auth.login');
    }
});

Route::get('/dashboard/login', function () {
  Auth::routes();
    if(Auth::check()) {
        return redirect('/dashboard');
    } else {
        return redirect('/');
    }
});
Route::get('/dashboard/logout', 'Auth\LoginController@logout');
