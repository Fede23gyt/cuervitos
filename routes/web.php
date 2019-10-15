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

Route::get('/', function () {
    return view('welcome');
});

Route::get('profesores/', function () {
    //return view('welcome');
    return 'Listado de profesores';
    //return view ('profesores/index');
});

Route::get('profesores/editar', function () {
    //return view('welcome');
    return 'Edicion de profesores';
});
Route::get('profesores/crear', function () {
    //return view('welcome');
    return 'Creacion de profesores';
});
Route::get('profesores/borrar', function () {
    //return view('welcome');
    return 'Borrado de profesores';
});

//Route::resource('profesores', 'Profesores');

