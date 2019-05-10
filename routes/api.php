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

Route::group(['prefix' => 'categoria'], function() {
    Route::post('insertar', 'CategoriaController@insertar');
    Route::post('actualizar', 'CategoriaController@actualizar');
    Route::delete('eliminar/{id}', 'CategoriaController@destroy');
    Route::get('/', 'CategoriaController@listar');
    Route::get('/{id}', 'CategoriaController@mostrar');
});

Route::group(['prefix' => 'producto'], function() {
    Route::post('insertar', 'ProductoController@insertar');
    Route::post('actualizar', 'ProductoController@actualizar');
    Route::delete('eliminar/{id}', 'ProductoController@destroy');
    Route::get('/', 'ProductoController@listar');
    Route::get('/{id}', 'ProductoController@mostrar');
});

Route::group(['prefix' => 'proveedor'], function() {
    Route::post('insertar', 'ProveedorController@insertar');
    Route::post('actualizar', 'ProveedorController@actualizar');
    Route::delete('eliminar/{id}', 'ProveedorController@destroy');
    Route::get('/', 'ProveedorController@listar');
    Route::get('/{id}', 'ProveedorController@mostrar');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
