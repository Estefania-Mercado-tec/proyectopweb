<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReporteServicioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reportes/servicios', [ReporteServicioController::class, 'index'])
    ->name('reportes.servicios');
    