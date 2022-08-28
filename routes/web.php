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

Auth::routes();
Route::get('/index', 'TransactionController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::group(
    [
        'prefix' => LocalizationService::locale(),
        'middleware' => 'setLocale'
    ],
    function () {
        Route::get('/home', 'HomeController@index');
    }
);
Route::get('/accounts', 'AccountsController@index');
Route::get('/records', 'RecordsController@index');


