<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KepantiiaanController;
use App\Http\Controllers\TenantController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [HomeController::class, 'submitContact'])->name('contact.submit');

Route::get('/kepanitiaan', [KepantiiaanController::class, 'index'])->name('kepanitiaan');

Route::get('/tenant', [TenantController::class, 'index'])->name('tenant');