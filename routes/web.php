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
<<<<<<< HEAD
Route::get('/addCategory', 'CatalogueController@addCategory');
Route::post('/storeCategory', 'CatalogueController@storeCategory');
Route::get('/storeCategory', 'CatalogueController@addCategory');
Route::get('/showCategories', 'CatalogueController@showCategories');
Route::post('/editCategory', 'CatalogueController@editCategory');
Route::post('/updateCategory', 'CatalogueController@updateCategory');
Route::post('/deleteCategory', 'CatalogueController@deleteCategory');

//subcategory
Route::get('/addSubCategory', 'CatalogueController@addSubCategory');
Route::post('/storeSubCategory', 'CatalogueController@storeSubCategory');
Route::get('/showSubCategories', 'CatalogueController@showSubCategories');
Route::post('/editSubCategory', 'CatalogueController@editSubCategory');
Route::post('/updateSubCategory', 'CatalogueController@updateSubCategory');
Route::post('/deletesubCategory', 'CatalogueController@deletesubCategory');

//Description
Route::get('/addDescription', 'CatalogueController@addDescription');
Route::post('/storeDescription', 'CatalogueController@storeDescription');
Route::get('/showDescriptions', 'CatalogueController@showDescriptions');
Route::post('/updateDescription', 'CatalogueController@updateDescription');
Route::post('/editDescription', 'CatalogueController@editDescription');
Route::post('/deleteDescription', 'CatalogueController@deleteDescription');
=======
Route::get('/addCategory', 'WarehouseController@addCategory');
Route::post('/storeCategory', 'WarehouseController@storeCategory');
Route::get('/storeCategory', 'WarehouseController@addCategory');
Route::get('/showCategories', 'WarehouseController@showCategories');
Route::post('/editCategory', 'WarehouseController@editCategory');
>>>>>>> c73affbbd1b400ade421164494935a2481980cf8
