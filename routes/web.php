<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/chi-siamo', [PublicController::class, 'chiSiamo'])->name('aboutUs');

Route::get('/services', [ServiceController::class, 'servizi'])->name('services');

Route::get('/servizi/dettagli/{id}', [ServiceController::class, 'dettaglio'])->name('services.details');