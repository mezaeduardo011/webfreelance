<?php

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


Route::get('/','FrontController@testExcel');

Route::get('/blank','FrontController@blank');
Route::get('/login','FrontController@login');
Route::get('proyecto_cliente_index','FrontController@proyecto_cliente_index');
Route::get('registrarProyecto','FrontController@registrarProyecto');
Route::get('proyectos_freelancer_index','FrontController@postulacion_freelancer_index');
Route::get('registrarPostulacion','FrontController@registrarPostulacion');
Route::get('verPostulaciones/{id_proyecto}','FrontController@verPostulaciones');
Route::get('postulaciones','FrontController@vistaPostulaciones');




