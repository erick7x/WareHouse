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

Route::get('/', 'WarehouseController@index');

//items
Route::get('/addItem', 'WarehouseController@addItem');
Route::get('/showItems', 'WarehouseController@showItems');
Route::post('/editItem', 'WarehouseController@editItem');
Route::post('/updateItem', 'WarehouseController@updateItem');
Route::post('/deleteItem', 'WarehouseController@deleteItem');
Route::post('/store', 'WarehouseController@store');
Route::get('/store', 'WarehouseController@addItem');

//catalogue
Route::get('/addCategory', 'WarehouseController@addCategory');
Route::post('/storeCategory', 'WarehouseController@storeCategory');
Route::get('/storeCategory', 'WarehouseController@addCategory');
Route::get('/showCategories', 'WarehouseController@showCategories');
Route::post('/editCategory', 'WarehouseController@editCategory');
