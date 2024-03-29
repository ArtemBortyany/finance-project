<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('get-wallet', 'TransactionController@getWallet');
Route::post('create-wallet', 'TransactionController@createWallet');
Route::post('create-transaction', 'TransactionController@createTransaction');
Route::post('create-category', 'TransactionController@createCategory');
Route::get('get-category', 'TransactionController@getCategory');
Route::get('get-data', 'TransactionController@allData')->name('transactions-data');
Route::get('sum-data', 'TransactionController@WalletSum');
Route::get('transaction-by-date', 'TransactionController@getTransactions');
Route::post('update-transaction/{transaction}', 'TransactionController@updateTransaction');
Route::post('delete-transaction/{transaction}', 'TransactionController@deleteTransaction');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



