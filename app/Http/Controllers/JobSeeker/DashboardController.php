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
        $skills = auth('job-seeker')->user()->skills;
        $experiences = auth('job-seeker')->user()->experiences;
        return view('job-seeker.pages.cv')->with([
            'skills' => $skills,
            'experiences' => $experiences
        ]);
    }

    public function addSkill(Request $request){

        $request->validate([
            'name' => 'required|min:5'
        ]);

        DB::beginTransaction();
        try{

            $data = [
                'skill' => $request->input('name'),
                'candidate_id' => auth('job-seeker')->id()
            ];
            $this->jobSeekerRepository->addSkill($data);
            DB::commit();
        
            return back()->with('success', 'Skill added successfully');

        }catch(\Exception $e){
            DB::rollBack();
            return back()->with('error', 'Something went wrong!');
        }
    }


    public function addExperience(Request $request){
     
        DB::beginTransaction();
        try{

            $data = [
                'title' => $request->title,
                'employment_type' => $request->employment_type,
                'company_name' => $request->company_name,
                'location' => $request->location,
                'location_type' => $request->location_type,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'candidate_id' => auth('job-seeker')->id()
            ];

            $this->jobSeekerRepository->addExperience($data);
            DB::commit();
            return back()->with('success', 'Experience added successfully');

        }catch(\Exception $e){
            DB::rollBack();
            dd($e);
            return back()->with('error', 'Something went wrong!');
        }
    }

    public function logout(){
        auth('job-seeker')->logout();
        return redirect()->route('job-seeker.login.page');
    }

}
