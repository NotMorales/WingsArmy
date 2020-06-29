<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::resource('mesero', 'meseroController');
Route::get('mesero/{mesero}/delete', 'meseroController@delete')->name('mesero.delete');

Route::resource('mesa', 'mesaController');

Route::resource('checador', 'checadorController');
Route::get('checador/{checador}/exit', 'checadorController@exit')->name('checador.exit');
Route::get('checador/mostrar/todos', 'checadorController@all')->name('checador.all');

Route::resource('asignacion', 'asignacionController');
Route::get('asignacion/{mesa}/asignar', 'asignacionController@asignar')->name('asignacion.asignar');
Route::get('asignacion/{mesa}/terminar', 'asignacionController@terminar')->name('asignacion.terminar');

Route::resource('reporte', 'reporteController');
Route::post('reporte/fecha', 'reporteController@fecha')->name('reporte.fecha');
