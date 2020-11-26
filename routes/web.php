<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function(){
    return view('system.system');
});
//products
Route::get('/products', 'ProductsController@index');
//create
Route::get('/products/create', 'ProductsController@create');
//show
Route::get('/products/{product}', 'ProductsController@show');
//store
Route::post('/products', 'ProductsController@store');
//edit
Route::get('/products/{product}/edit', 'ProductsController@edit');
//update
Route::put('products/{product}', 'ProductsController@update');
//delete screen
Route::get('products/{product}/delete', 'ProductsController@delete');
//delete
Route::delete('products/{product}', 'ProductsController@destroy');


//store
Route::get('/stores' , 'StoresController@index');
//create
Route::get('/stores/create', 'StoresController@create');
//show
Route::get('/stores/{store}', 'StoresController@show');
//store
Route::post('/stores', 'StoresController@store');
//edit
Route::get('/stores/{store}/edit', 'StoresController@edit');
//update
Route::put('stores/{store}', 'StoresController@update');
//delete screen
Route::get('stores/{store}/delete', 'StoresController@delete');
//delete
Route::delete('stores/{store}', 'StoresController@destroy');



//transactions
Route::get('/transactions' , 'TransactionsController@index');
//create
Route::get('/transactions/create', 'TransactionsController@create');
//show
Route::get('/transactions/{transaction}', 'TransactionsController@show');
//store
Route::post('/transactions', 'TransactionsController@store');
//edit
Route::get('/transactions/{transaction}/edit', 'TransactionsController@edit');
//update
Route::put('transactions/{transaction}', 'TransactionsController@update');
//delete screen
Route::get('transactions/{transaction}/delete', 'TransactionsController@delete');
//delete
Route::delete('transactions/{transaction}', 'TransactionsController@destroy');


