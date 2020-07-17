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

//Rutas Monitorias
Route::get('/Monitorias', 'MonitoriasController@create')->name('monitorias');
Route::get('/editar2/{idMonitorias}', 'MonitoriasController@edit')->name('editar2');

Route::post('/agregar2', 'MonitoriasController@store')->name('store2');
Route::put('/update2/{idMonitorias}','MonitoriasController@update')->name('update2');

Route::delete('/eliminar/{idMonitorias}', 'MonitoriasController@destroy')->name('eliminar');

// Rutas plantillas
Route::get('/', 'PlantillaController@index')->name('plantilla');

// Rutas Monitores
Route::get('/Monitores', 'MonitoresController@index')->name('monitores');
Route::get('/editar/{idMonitores}', 'MonitoresController@edit')->name('editar');

Route::post('/agregar', 'MonitoresController@store')->name('store');
Route::put('/update/{idMonitores}','MonitoresController@update')->name('update');


