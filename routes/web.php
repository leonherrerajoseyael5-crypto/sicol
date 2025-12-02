<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AIController;

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

// CRUD de reportes
Route::get('/reportes', [ReportController::class, 'index'])->name('reportes.index');
Route::get('/reportes/crear', [ReportController::class, 'create'])->name('reportes.create');
Route::post('/reportes', [ReportController::class, 'store'])->name('reportes.store');
Route::get('/reportes/{id}', [ReportController::class, 'show'])->name('reportes.show');

// IA
Route::get('/reportes/ia/{id}', [AIController::class, 'analizar'])->name('reportes.ia');

