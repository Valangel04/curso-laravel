<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\ReservaController;

Route::get('/cliente', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('/cliente', [ClienteController::class, 'store'])->name('cliente.store');

Route::get('/habitacion', [HabitacionController::class, 'create'])->name('habitacion.create');
Route::post('/habitacion', [HabitacionController::class, 'store'])->name('habitacion.store');

Route::get('/reserva', [ReservaController::class, 'create'])->name('reserva.create');
Route::post('/reserva', [ReservaController::class, 'store'])->name('reserva.store');
