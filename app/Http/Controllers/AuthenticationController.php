<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    
    public function agencyLoginPage(){
        if(auth('web')->check()){
            return redirect()->route('agency.dashboard');
        }
        return view('agency.auth.signin');
    }

    public function jobSeekerSignupPage(){
        return view('job-seeker.auth.signup');
    }

    public function jobSeekerLoginPage(){
        if(auth('job-seeker')->check()){
            return redirect()->route('seeker.dashboard');
        }
        return view('job-seeker.auth.signin');
    }
    
}
