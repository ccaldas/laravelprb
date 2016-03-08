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
//Rutas aplicativo 
Route::get('index', 'PrincipalController@index');
Route::post('asigna', 'PrincipalController@store');
Route::get('asignados', 'PrincipalController@asignados');

//Rutas aplicativos 
Route::get('Areas/index','AreasController@index');
Route::get('Areas/edit','AreasController@edit');
Route::post('area','AreasController@store');
Route::delete('area/{area}','AreasController@destroy');

Route::get('Facultades/index','FacultadesController@index');
Route::get('Facultades/edit','FacultadesController@edit');
Route::post('facultad','FacultadesController@store');
Route::delete('facultad/{facultad}','FacultadesController@destroy');

Route::get('Investigadores/index','InvestigadoresController@index');
Route::get('Investigadores/edit','InvestigadoresController@edit');
Route::post('investigador','InvestigadoresController@store');
Route::delete('investigador/{investigador}','InvestigadoresController@destroy');
Route::delete('investigador/edit/{investigador}','InvestigadoresController@update');