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

Route::middleware('auth:api')->group(function(){
    Route::get('/user', 'UsersController@me');
});

Route::prefix('/products')->group(function(){
    Route::get('', 'ProductsController@index');
    Route::get('/{id}', 'ProductsController@product');
});
Route::prefix('/billings')->group(function () {
    Route::get('', 'BillingsController@index');
});

Route::prefix('/shippings')->group(function () {
    Route::get('', 'ShippingsController@index');
});
Route::prefix('/clients')->group(function () {
    Route::get('', 'UsersController@index');
});

Route::prefix('/tasks')->group(function () {
    Route::get('', 'TasksController@index');
});