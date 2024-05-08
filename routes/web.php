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

// Agency protected routes
Route::prefix('agency')->group(function(){

    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('agency.dashboard');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('agency.logout');

    Route::get('/job-seekers/list', [DashboardController::class, 'jobSeekersPage'])->name('agency.jobSeekersPage');
    Route::get('/job-seekers/filter', [DashboardController::class, 'filterCandidate'])->name('agency.filterCandidate');
});

//Job seeker protected routes
Route::prefix('job-seeker')->middleware(['auth:job-seeker'])->group(function(){

    //dashboard
    Route::get('/dashboard', [\App\Http\Controllers\JobSeeker\DashboardController::class, 'index'])->name('seeker.dashboard');
    Route::get('/my/cv', [\App\Http\Controllers\JobSeeker\DashboardController::class, 'myCvPage'])->name('seeker.myCvPage');
    Route::get('/logout', [\App\Http\Controllers\JobSeeker\DashboardController::class, 'logout'])->name('seeker.logout');


    Route::post('/updatePersonalDetail', [\App\Http\Controllers\JobSeeker\DashboardController::class, 'updatePersonalDetail'])->name('seeker.updatePersonalDetail');
    Route::post('/addSkill', [\App\Http\Controllers\JobSeeker\DashboardController::class, 'addSkill'])->name('seeker.addSkill');
    Route::post('/addExperience', [\App\Http\Controllers\JobSeeker\DashboardController::class, 'addExperience'])->name('seeker.addExperience');
});
