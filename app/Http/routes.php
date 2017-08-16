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
Route::get('Accidentes/Form', 'AccidentesController@form');
Route::post('Accidentes/Detalles', 'AccidentesController@detalles');
Route::post('Accidentes/Complemento', 'AccidentesController@complemento');
Route::post('Accidentes/GuardarNuevo', 'AccidentesController@GuardarNuevo');
Route::post('Accidentes/GuardarComplemento', 'AccidentesController@guardar_complemento');
Route::post('Accidentes/FormularioTiro', 'AccidentesController@form_tiro');
Route::post('Accidentes/FormularioRetiro', 'AccidentesController@form_retiro');


Route::post('Cotizacion/Nuevo', 'CotizacionController@Nuevo');

Route::get('Autos', 'AutosController@index');
Route::post('Autos/Nuevo', 'AutosController@nuevo');
Route::post('Autos/Guardar', 'AutosController@GuardarNuevo');

Route::post('Documentos/Cargar', 'DocumentosController@Cargar');
Route::post('Documentos/uploading', 'uploadController@uploading');

Route::post('Fotos/Cargar', 'FotografiasController@Cargar');
Route::post('Fotos/uploading', 'uploadController@uploading');

Route::post('Personas/Guardar', 'AccidentesController@Personas');

Route::post('Material/Agregar_Valorizacion', 'CotizacionController@Material');
Route::post('Personal/Agregar_Valorizacion', 'CotizacionController@Personal');
Route::post('Maquinaria/Agregar_Valorizacion', 'CotizacionController@Maquinaria');
Route::post('Otros/Agregar_Valorizacion', 'CotizacionController@Otros');

Route::post('Gestiones/Nuevo', 'GestionesController@Nuevo');
Route::post('Gestiones/Guardar', 'GestionesController@GuardarNuevo');

Route::get('Aseguradoras', 'AseguradorasController@index');
Route::get('Aseguradoras/Nuevo', 'AseguradorasController@nuevo');
Route::post('Aseguradoras/GuardarNuevo', 'AseguradorasController@GuardarNuevo');


Route::get('Concesiones', 'ConcesionesController@index');


Route::get('Calendario', 'CalendarioController@index');


Route::get('c1', 'AccidentesController@c1');
Route::get('c2', 'AccidentesController@c2');
Route::get('c3', 'AccidentesController@c3');
Route::get('c4', 'AccidentesController@c4');
Route::get('c5', 'AccidentesController@c5');

Route::get('/', 'HomeController@index');
