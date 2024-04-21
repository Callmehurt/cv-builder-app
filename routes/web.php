<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'dashboard'])->name('agency.dashboard');
Route::get('/another', [HomeController::class, 'anotherPage'])->name('agency.anotherPage');
// Route::get('/', function () {
//     return view('welcome');
// });
