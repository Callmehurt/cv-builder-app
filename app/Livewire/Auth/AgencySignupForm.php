<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Rule;

class AgencySignupForm extends Component
{

    #[Rule('required|email')]
    public $email = '';

    #[Rule('required')]
    public $password = '';


    public function authenticate(){
        $this->validate();

        // $this->reset(['password']);
    }

    public function render()
    {
        return view('livewire.auth.agency-signup-form');
    }
}
