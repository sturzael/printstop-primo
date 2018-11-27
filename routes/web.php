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
Route::group(['prefix' => 'dashboard','middleware'=>'auth'], function () {
    Voyager::routes();
    Route::post('/product/estimate', 'AjaxEstimateController@estimate');
    Route::resource('/product', 'Voyager\VoyagerController');
    Route::get('/contact', 'contactController@index');
    Route::get('/logout', 'Auth\LoginController@logout');
});
