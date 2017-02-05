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

Route::get('Incidentes', 'IncidentesController@index');
Route::get('Incidentes/Nuevo', 'IncidentesController@nuevo');
Route::get('Incidentes/Mostrar', 'IncidentesController@mostrar');
Route::post('Incidentes/Detalles', 'IncidentesController@detalles');
Route::post('Incidentes/GuardarNuevo', 'IncidentesController@GuardarNuevo');


Route::get('Accidentes', 'AccidentesController@index');
Route::get('Accidentes/Nuevo', 'AccidentesController@nuevo');
Route::get('Accidentes/Mostrar', 'AccidentesController@mostrar');
Route::post('Accidentes/Detalles', 'AccidentesController@detalles');
Route::post('Accidentes/GuardarNuevo', 'AccidentesController@GuardarNuevo');

Route::get('Cotizacion/Nuevo', 'CotizacionController@Nuevo');

Route::get('Autos', 'AutosController@index');
Route::post('Autos/Nuevo', 'AutosController@nuevo');
Route::post('Autos/Guardar', 'AutosController@GuardarNuevo');

Route::post('Documentos/Cargar', 'DocumentosController@Cargar');
Route::post('Documentos/uploading', 'uploadController@uploading');

Route::post('Fotos/Cargar', 'FotografiasController@Cargar');
Route::post('Fotos/uploading', 'uploadController@uploading');

Route::post('Material/Agregar_Valorizacion', 'CotizacionController@Material');
Route::post('Personal/Agregar_Valorizacion', 'CotizacionController@Personal');
Route::post('Maquinaria/Agregar_Valorizacion', 'CotizacionController@Maquinaria');
Route::post('Otros/Agregar_Valorizacion', 'CotizacionController@Otros');

Route::post('Gestiones/Nuevo', 'GestionesController@Nuevo');
Route::post('Gestiones/Guardar', 'GestionesController@GuardarNuevo');

Route::get('Aseguradoras', 'AseguradorasController@index');
Route::get('Concesiones', 'ConcesionesController@index');


Route::get('/', function () {
    return view('welcome');
});
