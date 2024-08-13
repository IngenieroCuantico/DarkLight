<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\Auth\RegistrarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController

//Rutas





Route::get('/', function () {
  return view('index');
});

Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//retorna a la pagina de inicio con todos los departamentos
Route::get('/dep', DepartamentoController::class .'@index')->name('departamento.index');
// departamentoroot  .../
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


/*


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



//NOTICIAS

//retorna a la pagina de inicio con todos los empleados
Route::get('/indexnoticia', NoticiaController::class .'@index')->name('noticia.index');

// retorna la forma de añadir empleados
Route::get('/noticia/create', NoticiaController::class . '@create')->name('noticia.create');

// añadir empleados a la base de datos
Route::post('/noticia', NoticiaController::class .'@store')->name('noticia.store');

//retorna las paginas a visualizar
Route::get('/noticia/{empleado}', NoticiaController::class .'@show')->name('noticia.show');

// retorna al formulario para editar los empleados
Route::get('/noticia/{noticia}/edit', EmpleadoController::class .'@edit')->name('noticia.edit');

// actualizar empleados
Route::put('/noticia/{noticia}', NoticiaController::class .'@update')->name('noticia.update');

// eliminar empleados
Route::delete('/noticia/{noticia}', NoticiaController::class .'@destroy')->name('noticia.destroy');



*/
//RUTAS PARA SISTEMA DE AUTENTICACION

/*
Route::get('/', AuthController::class .'@registrar')->name('registrar.create');
Route::post('/', RegistrarController::class .'@store')->name('registrar.store');
Route::post('/logout', RegistrarController::class .'@destroy')->middleware('auth');

Route::group(['middleware' => 'guest'], function () {
  Route::get('/register', [AuthController::class, 'register'])->name('register');
  Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
  Route::get('/login', [AuthController::class, 'login'])->name('login');
  Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});





Route::group(['middleware' => 'auth'], function () {
  Route::get('/home', [AuthController::class, 'index']);
  Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});


*/

//Route::get('/', function () {
  //  return view('welcome');
























  

//});



//Route::resource('departamentos','DepartamentoController');
//Route::resource('empleados','EmpleadoController');




//Route::get('/perfil', 'PerfilController@index')->middleware('auth');
