<?php

namespace App\Http\Controllers\Agency;

use App\Models\JobSeeker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\JobSeekerRepository;

class DashboardController extends Controller
{
    protected $jobSeekerRepository;

    public function __construct(JobSeekerRepository $jobSeekerRepository){
        $this->jobSeekerRepository = $jobSeekerRepository;
    }
    
    public function index(){
        return view('agency.pages.dashboard');
    }

    public function jobSeekersPage(){

        $candidates = $this->jobSeekerRepository->listCandidates();

        $filter = [
            'candidates' => $candidates,
            'skill' => '',
            'experience' => ''
        ];
        return view('agency.pages.job-seekers', compact('filter'));
    }


    public function filterCandidate(Request $request){

        $request->validate([
            'skill' => 'required_without:experience',
            'experience' => 'required_without:skill',
        ]);

        $filter = [
            'candidates' => null,
            'skill' => $request->skill,
            'experience' => $request->experience
        ];

        // $data = JobSeeker::with(['experiences' => function($q1){
        //     $q1->where('title', 'LIKE', '%Node Backend Developer%');
        // }])->first();
        

        $filter['candidates'] = $this->jobSeekerRepository->filterCandidate($filter);
        return view('agency.pages.job-seekers', compact('filter'));

    }

    public function logout(){
        auth('web')->logout();
        return redirect()->route('agency.login.page');
    }
}
