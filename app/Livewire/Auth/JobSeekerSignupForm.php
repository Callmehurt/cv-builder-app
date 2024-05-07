<?php

namespace App\Livewire\Auth;

use App\Models\Experiences;
use App\Models\JobSeeker;
use App\Models\Skills;
use App\Repositories\JobSeekerRepository;
use Livewire\Component;

use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Hash;

class JobSeekerSignupForm extends Component
{

    #[Rule('required')]
    public $name;

    #[Rule('required|email|unique:job_seekers')]
    public $email;

    #[Rule('required|numeric')]
    public $contact;

    #[Rule('required')]
    public $password;

    #[Rule('required')]
    public $address;


    public function signupJobSeeker(){

        $this->validate();

        $details = [
            'name' => $this->name,
            'email' => $this->email,
            'contact' => $this->contact,
            'address' => $this->address,
            'password' => Hash::make($this->password),
        ];

        try{

            (new JobSeekerRepository(new JobSeeker, new Skills, new Experiences))->create($details);
            notyf()
            ->position('x', 'right')
            ->position('y', 'top')
            ->addSuccess('Signup process completed successfully. Please proceed to login');
            return redirect()->route('job-seeker.login.page');

        }catch(\Exception $e){
            notyf()
            ->position('x', 'right')
            ->position('y', 'top')
            ->addError('Something went wrong! Try Again');
        }
    }

    public function render()
    {
        return view('livewire.auth.job-seeker-signup-form');
    }
}
