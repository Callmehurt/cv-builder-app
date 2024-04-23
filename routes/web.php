<?php

use App\Http\Controllers\Agency\DashboardController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'dashboard'])->name('agency.dashboard');
Route::get('/another', [HomeController::class, 'anotherPage'])->name('agency.anotherPage');


// Agency authentication

Route::get('/agency/signin', [AuthenticationController::class, 'agencyLoginPage'])->name('agency.login.page');
Route::get('/job-seeker/signin', [AuthenticationController::class, 'jobSeekerLoginPage'])->name('job-seeker.login.page');
Route::get('/job-seeker/signup', [AuthenticationController::class, 'jobSeekerSignupPage'])->name('job-seeker.sinup.page');

Route::prefix('agency')->group(function(){

    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('agency.dashboard');
});
