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

Route::get('/', 'HomeController@index');


Route::get('get_product/{id}','HomeController@gettingProduct');

Route::get('/autocomplete/search_product','HomeController@searchProduct');

Route::get('product_detail/{id}', 'HomeController@product_detail');

Route::post('autocomplete/fetch', 'HomeController@fetch')->name('autocomplete');