<?php

namespace App\Http\Controllers\JobSeeker;

use App\Repositories\JobSeekerRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    
    protected $jobSeekerRepository;

    public function __construct(JobSeekerRepository $jobSeekerRepository){
        $this->jobSeekerRepository = $jobSeekerRepository;
    }

    public function index(){
        return view('job-seeker.pages.dashboard');
    }

    public function myCvPage(){
        return view('job-seeker.pages.cv');
    }

    public function addSkill(Request $request){

        $request->validate([
            'name' => 'required|min:5'
        ]);

        DB::beginTransaction();
        try{

            $data = [
                'name' => $request->input('name')
            ];

            $this->jobSeekerRepository->addSkill($data);

            return back()->with('success', 'Skill added successfully');

        }catch(\Exception $e){
            DB::rollBack();
            return back()->with('error', 'Something went wrong!');
        }

    }
}
