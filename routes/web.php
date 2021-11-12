<?php

use App\Http\Controllers\PerosnasController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WelcomeController::class, 'index'])->name('index');

Route::get('mostrar/{id}', [PerosnasController::class, 'mostrar'])->name('mostrar.mostrar');

Route::get('crear', [PerosnasController::class, 'crear'])->name('mostrar.crear');

Route::post('crear_persona', [PerosnasController::class, 'store'])->name('mostrar.store');

Route::get('mostrar/{persona}/editar', [PerosnasController::class, 'editar'])->name('mostrar.editar');

Route::put('mostrar/{persona}', [PerosnasController::class, 'actualizar'])->name('mostrar.actualizar');

Route::delete('mostrar/{persona}', [PerosnasController::class, 'eliminar'])->name('mostrar.eliminar');
