<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Skills;
use App\Models\JobSeeker;
use App\Models\Experiences;
use Illuminate\Support\Facades\Hash;
use App\Repositories\JobSeekerRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobSeekerTest extends TestCase
{
    // use RefreshDatabase;
    
    /** @test */
    public function test_is_job_seeker_created(): void{

        $jobSeekerData = [
            'name' => 'Test', 
            'email' => 'abc@mail.com',
            'password' => Hash::make('nepal'),
            'address' => 'Lonfon',
            'contact' => '9858985896'
        ];

        $repository = new JobSeekerRepository(new JobSeeker, new Skills, new Experiences);

        $result = $repository->create($jobSeekerData);

        $this->assertIsObject($result);


    }
    
    /** @test */
    public function is_skill_added(): void
    {
        $candidate = JobSeeker::create([
            'name' => 'Test', 
            'email' => 'abc@mail.com',
            'password' => Hash::make('nepal'),
            'address' => 'London',
            'contact' => '9858985896'
        ]);
        
        $skillData = [
            'skill' => 'PHP Development',
            'candidate_id' => $candidate->id
        ];

        $repository = new JobSeekerRepository(new JobSeeker, new Skills, new Experiences);

        $result = $repository->addSkill($skillData);

        $this->assertIsObject($result);
    }
}
