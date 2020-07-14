<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Registro de alumnos
Route::get('/registro','RegistroController@index');
Route::post('/registro','RegistroController@store');



//Jefe de division

Route::get('/jefeDivision',"jefeController@index");

//Alumno datos

Route::get('/alumno',"alumnoController@index");

//Residencias solicitud

Route::get('/residencias',"residennciasController@index");

//Anteproyecto solicitud

Route::get('/anteproyecto',"anteproyectoController@index");

Route::get('/perfil',"perfilController@index");