<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'dashboard'])->name('agency.dashboard');
Route::get('/another', [HomeController::class, 'anotherPage'])->name('agency.anotherPage');


// Agency authentication

Route::get('/agency/signin', [AuthenticationController::class, 'agencyLoginPage'])->name('agency.login.page');
