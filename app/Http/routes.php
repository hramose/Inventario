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
Route::get('error', function(){ 
    abort(500);
    abort(503);
});

Route::get('/', 'FrontController@login');
Route::get('index', 'FrontController@index');
Route::get('admin', 'FrontController@admin');
Route::resource('usuario', 'UsuarioController');
/*
|---------------------------------------------------------------------------
| Rutas Log (Login-Logout)
|---------------------------------------------------------------------------
*/
Route::resource('log', 'LogController');
Route::get('logout', 'LogController@logout');
/*
|---------------------------------------------------------------------------
| Rutas Elementos Fisicos
|---------------------------------------------------------------------------
*/
Route::resource('efisico', 'EfisicoController');
Route::resource('tefisico', 'TefisicoController');
Route::resource('defisico', 'DefisicoController');
Route::resource('hefisico', 'HefisicoController');
Route::resource('oefisico', 'OefisicoController');
Route::resource('befisico', 'BefisicoController');
Route::resource('refisico', 'RefisicoController');
Route::resource('tred', 'TredController');
/*
|---------------------------------------------------------------------------
| Rutas Elementos Virtuales
|---------------------------------------------------------------------------
*/
Route::resource('evirtual', 'EvirtualController');
Route::resource('tevirtual', 'TevirtualController');
Route::resource('devirtual', 'DevirtualController');
Route::resource('oevirtual', 'OevirtualController');
Route::resource('bevirtual', 'BevirtualController');
Route::resource('revirtual', 'RevirtualController');
/*
|---------------------------------------------------------------------------
| Rutas Aplicaciones
|---------------------------------------------------------------------------
*/
Route::resource('aplicacion', 'AplicacionController');
Route::resource('daplicacion', 'DaplicacionController');
Route::resource('asignaref', 'AsignarefController');
Route::resource('asignarev', 'AsignarevController');