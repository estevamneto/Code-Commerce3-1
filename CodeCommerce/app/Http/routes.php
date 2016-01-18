<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::group(['prefix'=> 'admin', 'where' => ['id' => '[0-9]+']], function () {
//
//    Route::get('categories/{id}', ['as'=> 'categories', 'uses'=> 'AdminCategoriesController@index']);
//
//    Route::get('products/{id}', ['as'=> 'products', 'uses'=> 'AdminProductsController@index']);
// });

Route::group(['prefix'=> 'admin'], function () {

route::get('categories', ['as'=> 'categories', 'uses'=> 'CategoriesController@index']);
route::post('categories', ['as'=> 'categories.store', 'uses'=> 'CategoriesController@store']);
route::get('categories/create', ['as'=> 'categories.create', 'uses'=> 'CategoriesController@create']);
route::get('categories/{id}/edit', ['as'=> 'categories.edit', 'uses'=> 'CategoriesController@edit']);
route::put('categories/{id}/update', ['as'=> 'categories.update', 'uses'=> 'CategoriesController@update']);
route::get('categories/{id}/destroy', ['as'=> 'categories.destroy', 'uses'=> 'CategoriesController@destroy']);

route::get('products', ['as'=> 'products', 'uses'=> 'ProductsController@index']);
route::post('products', ['as'=> 'products.store', 'uses'=> 'ProductsController@store']);
route::get('products/create', ['as'=> 'products.create', 'uses'=> 'ProductsController@create']);
route::get('products/{id}/edit', ['as'=> 'products.edit', 'uses'=> 'ProductsController@edit']);
route::put('products/{id}/update', ['as'=> 'products.update', 'uses'=> 'ProductsController@update']);
route::get('products/{id}/destroy', ['as'=> 'products.destroy', 'uses'=> 'ProductsController@destroy']);

});