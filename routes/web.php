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

Route::get('/Monitores', 'MonitoresController@index')->name('monitores');
Route::get('/Monitorias', 'MonitoriasController@index')->name('monitorias');
Route::get('/', 'PlantillaController@index')->name('plantilla');
Route::get('/editar/{id}', 'MonitoresController@edit')->name('editar');

Route::post('/agregar', 'MonitoresController@store')->name('store');

Route::put('/update/{id}','MonitoresController@update')->name('update');


