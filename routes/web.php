<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\servicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/chi-siamo', [PublicController::class, 'chiSiamo'])->name('aboutUs');

Route::get('/services', [ServicesController::class, 'servizi'])->name('services');

Route::get('/servizi/dettagli/{name}', [ServicesController::class, 'dettaglio'])->name('services.details');