<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Validation\Rule;

class JobSeekerSignupForm extends Component
{

    #[Rule('required')]
    public $name;

    #[Rule('required|email|unique:job_seekers')]
    public $email;

    #[Rule('required|min:10|max:10')]
    public $contact;

    #[Rule('required')]
    public $password;

    #[Rule('required')]
    public $address;

    public function render()
    {
        return view('livewire.auth.job-seeker-signup-form');
    }
}
