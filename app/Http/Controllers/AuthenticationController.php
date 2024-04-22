<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    
    public function agencyLoginPage(){
        return view('agency.auth.signin');
    }

    
}
