<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Rule;

#/ notyf
class AgencySignupForm extends Component
{

    #[Rule('required|email')]
    public $email = '';

    #[Rule('required')]
    public $password = '';

    public function authenticate(){
        $this->validate();

        $credentials = [
            'email' => $this->email,
            'password' => $this->password
        ];

        if (auth('web')->attempt($credentials)) {
            request()->session()->regenerate();

            return redirect()->intended('/agency/dashboard');
        }

        notyf()
            ->position('x', 'right')
            ->position('y', 'top')
            ->addError('The provided credentials do not match our records.');

        $this->reset(['password']);
    }

    public function render()
    {
        return view('livewire.auth.agency-signup-form');
    }
}
