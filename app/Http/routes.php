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



Route::controller('/user','UserController');
Route::controller('/ventas','VentasController');
Route::controller('/proveedor','ProveedorController');
Route::controller('/inventario','InventarioController');
Route::controller('/reports','ReportsController');
Route::controller('/producto','ProductoController');
Route::controller('/ventas','VentasController');
Route::controller('/contabilidad','ContabilidadController');
Route::get('compra/{id}', 'CompraController@index');
Route::auth();
Route::get('/', 'HomeController@index');
