<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;

Route::get('/', function () {
   // return view('welcome');
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

Route::get('/kvkOrden', [InicioController::class, 'kvkOrden']);