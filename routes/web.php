<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home/Welcome', [\App\Http\Controllers\PaginaController::class, 'Welc'])->name('welcome');
Route::get('home/RegistroHotel', [\App\Http\Controllers\PaginaContoller::class, 'registro'])->name('registroHotel');
Route::get('home/RegistroTipoHabitación', [\App\Http\Controllers\PaginaContoller::class, 'registroTipo'])->name('registroTipoHab');
Route::get('home/RegistroHabitación', [\App\Http\Controllers\PaginaContoller::class, 'registroHab'])->name('registroHabitacion');
Route::get('home/RegistroCliente', [\App\Http\Controllers\PaginaContoller::class, 'registroCliente'])->name('registroCliente');
Route::get('home/RegistroEstadoHabitación', [\App\Http\Controllers\PaginaContoller::class, 'registroEstadoHab'])->name('registroEstadHabitacion');


Route::get('/mostrar', [\App\Http\Controllers\HotelController::class, 'mostrar'])->name('mostrar');
Route::post('/RegistrarHotel', [\App\Http\Controllers\HotelController::class, 'create'])->name('registrarHotel');
Route::delete('/EliminarHotel/{id}', [\App\Http\Controllers\HotelController::class, 'delete'])->name('eliminarHotel');
Route::get('/EditarHotel/{id}', [\App\Http\Controllers\HotelController::class, 'edit'])->name('editarHotel');
Route::patch('/actualizarHotel', [\App\Http\Controllers\HotelController::class, 'update'])->name('actualizarHotel');
Route::post('/RegistrarTipoHabitacion', [\App\Http\Controllers\HotelController::class, 'createTipo'])->name('registrarTipoHab');
Route::post('/RegistrarEstadoHabitacion', [\App\Http\Controllers\HotelController::class, 'createEstado'])->name('registrarEstadoHab');
Route::post('/RegistrarHabitacion', [\App\Http\Controllers\HotelController::class, 'createHab'])->name('registrarHabitacion');
Route::get('/mostrarHabitacion', [\App\Http\Controllers\HotelController::class, 'mostrarhabit'])->name('mostrarhabit');

