<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use App\Repositories\JobSeekerRepository;
use Illuminate\Http\Request;

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
        $filter['candidates'] = $this->jobSeekerRepository->filterCandidate($filter);
        return view('agency.pages.job-seekers', compact('filter'));

    }

    public function logout(){
        auth('web')->logout();
        return redirect()->route('agency.login.page');
    }
}
