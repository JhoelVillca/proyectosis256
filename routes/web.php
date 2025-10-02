<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;

use App\Http\Controllers\SumaController;

use App\Http\Controllers\EcuacionCuadraticaController;

Route::get('/', function () {
   
   echo "Hola Mundo desde Laravel";
});

Route::get('/invocar', [InicioController::class, 'Invocar']);

Route::get('/presentacion', [InicioController::class, 'presentacion']);
Route::get('/comentario', [InicioController::class, 'comentario']);

Route::get('/inicio',[InicioController::class, 'index']);
Route::get('/sa',[InicioController::class, 'saludo']);
Route::get('/nombre',[InicioController::class, 'nombre']);
Route::get('/res', [InicioController::class, 'Resultado']);
Route::get('/prueba', [InicioController::class, 'prueba']);


Route::get('/SInicio', [SumaController::class, 'index']);
Route::post('/sumar', [SumaController::class, 'sumar']) -> name('miSuma');

//Ec cuadratica
Route::get('/EInicio', [EcuacionCuadraticaController::class, 'index']);
Route::post('/ecuacioCuadratica', [EcuacionCuadraticaController::class, 'resEcuaCuadratica']) -> name('miEcuacionCuadratica');
