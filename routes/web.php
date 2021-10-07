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
Route::get('/home/Welcome',[\App\Http\Controllers\PaginaController::class,'Welc'])->name('welcome');
Route::get('home/RegistroHotel',[\App\Http\Controllers\PaginaContoller::class,'registro'])->name('registroHotel');
Route::get('home/RegistroHabitación',[\App\Http\Controllers\PaginaContoller::class,'registrohabitacion'])->name('registroHabitacion');
Route::get('home/RegistroCliente',[\App\Http\Controllers\PaginaContoller::class,'registroCliente'])->name('registroCliente');
