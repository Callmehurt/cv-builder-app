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


    //update personal details
    Route::post('/updatePersonalDetail', [\App\Http\Controllers\JobSeeker\DashboardController::class, 'updatePersonalDetail'])->name('seeker.updatePersonalDetail');
    
    //add new skill
    Route::post('/addSkill', [\App\Http\Controllers\JobSeeker\DashboardController::class, 'addSkill'])->name('seeker.addSkill');
    
    //add new experience
    Route::post('/addExperience', [\App\Http\Controllers\JobSeeker\DashboardController::class, 'addExperience'])->name('seeker.addExperience');

    //edit experience
    Route::get('/edit-experience/{exp_id}', [\App\Http\Controllers\JobSeeker\DashboardController::class, 'editExperience'])->name('seeker.editExperience');
    
    //update experience
    Route::put('/update-experience/{exp_id}', [\App\Http\Controllers\JobSeeker\DashboardController::class, 'updateExperience'])->name('seeker.updateExperience');
});
