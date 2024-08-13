<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\Auth\RegistrarController;


//Rutas


//retorna a la pagina de inicio con todos los departamentos
Route::get('/', DepartamentoController::class .'@index')->name('departamento.index');

// retorna la forma de añadir departamentos
Route::get('/departamento/create', DepartamentoController::class . '@create')->name('departamento.create');

// añadir departamentos a la base de datos
Route::post('/departamento', DepartamentoController::class .'@store')->name('departamento.store');

//retorna las paginas a visualizar
Route::get('/departamento/{departamento}', DepartamentoController::class .'@show')->name('departamento.show');

// retorna al formulario para editar los departamentos
Route::get('/departamento/{departamento}/edit', DepartamentoController::class .'@edit')->name('departamento.edit');

// actualizar departamentos
Route::put('/departamento/{departamento}', DepartamentoController::class .'@update')->name('departamento.update');

// eliminar departamentos
Route::delete('/departamento/{departamento}', DepartamentoController::class .'@destroy')->name('departamento.destroy');



//retorna a la pagina de inicio con todos los empleados
Route::get('/indexempleado', EmpleadoController::class .'@index')->name('empleado.index');

// retorna la forma de añadir empleados
Route::get('/empleado/create', EmpleadoController::class . '@create')->name('empleado.create');

// añadir empleados a la base de datos
Route::post('/empleado', EmpleadoController::class .'@store')->name('empleado.store');

//retorna las paginas a visualizar
Route::get('/empleado/{empleado}', EmpleadoController::class .'@show')->name('empleado.show');

// retorna al formulario para editar los empleados
Route::get('/empleado/{empleado}/edit', EmpleadoController::class .'@edit')->name('empleado.edit');

// actualizar empleados
Route::put('/empleado/{empleado}', EmpleadoController::class .'@update')->name('empleado.update');

// eliminar empleados
Route::delete('/empleado/{empleado}', EmpleadoController::class .'@destroy')->name('empleado.destroy');




//Rutas para el sistema de autenticacion

Route::get('/registrar', RegistrarController::class .'@create')->name('registrar.create');
Route::post('/registrar', RegistrarController::class .'@store')->name('registrar.store');
Route::post('/logout', LogoutController::class .'@destroy')->middleware('auth');


//Route::get('/', function () {
  //  return view('welcome');

//});



//Route::resource('departamentos','DepartamentoController');
//Route::resource('empleados','EmpleadoController');




//Route::get('/perfil', 'PerfilController@index')->middleware('auth');