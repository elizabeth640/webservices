<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('producto','App\Http\Controllers\productocontroller@getProducto');

Route::get('producto/{id}','App\Http\Controllers\productocontroller@getProductoid');

Route::post('addProducto','App\Http\Controllers\productocontroller@insertProducto');

Route::put('updateProducto/{id}','App\Http\Controllers\productocontroller@updateProducto');

Route::delete('deleteProducto/{id}','App\Http\Controllers\productocontroller@deleteProducto');