<?php

namespace Tests\Unit;

use App\Models\Experiences;
use App\Models\JobSeeker;
use App\Models\Skills;
use App\Repositories\JobSeekerRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
// use PHPUnit\Framework\TestCase;
use Tests\TestCase;


class AgencyTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    // use RefreshDatabase;

    /** @test */
    public function is_candidate_filter_function_working(): void {

        //filter fields
        $filter = [
            'skill' => '',
            'experience' => 'Node Backend Developer'
        ];
        
        $desiredCandidate = JobSeeker::with(['experiences' => function($q1) {
            $q1->where('title', 'LIKE', '%Node Backend Developer%');
        }])->first();
        
        $jobSeekerRepository = new JobSeekerRepository(new JobSeeker, new Skills, new Experiences);
        $candidates = $jobSeekerRepository->filterCandidate($filter);
        
        // Assert that there is at least one candidate retrieved
        $this->assertNotEmpty($candidates);

        $this->assertEquals($desiredCandidate->id, $candidates[0]->id);


    }
}
