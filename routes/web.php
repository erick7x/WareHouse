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

//Warehouse
Route::get('/', 'WarehouseController@index');

//items
Route::get('/addItem', 'ItemController@addItem');
Route::get('/showItems', 'ItemController@showItems');
Route::post('/editItem', 'ItemController@editItem');
Route::post('/updateItem', 'ItemController@updateItem');
Route::post('/deleteItem', 'ItemController@deleteItem');
Route::post('/store', 'ItemController@store');
Route::get('/store', 'ItemController@addItem');

//catalogue
Route::get('/addCategory', 'CatalogueController@addCategory');
Route::post('/storeCategory', 'CatalogueController@storeCategory');
Route::get('/storeCategory', 'CatalogueController@addCategory');
Route::get('/showCategories', 'CatalogueController@showCategories');
Route::post('/editCategory', 'CatalogueController@editCategory');
Route::post('/updateCategory', 'CatalogueController@updateCategory');
Route::post('/deleteCategory', 'CatalogueController@deleteCategory');
