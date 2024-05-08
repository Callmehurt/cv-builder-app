<?php
namespace App\Repositories;
use App\Models\Skills;
use App\Models\JobSeeker;
use App\Models\Experiences;
use Illuminate\Support\Arr;

class JobSeekerRepository{

    protected $jobSeekerModel;
    protected $skill;
    protected $experiences;
    
    public function __construct(JobSeeker $jobSeeker, Skills $skills, Experiences $experiences){
        $this->jobSeekerModel = $jobSeeker;
        $this->skill = $skills;
        $this->experiences = $experiences;
    }

    public function create($data){

        return $this->jobSeekerModel->create($data);
    }

    public function updatePersonalDetail($data){
        return $this->jobSeekerModel->where('id', '=', auth('job-seeker')->id())->update($data);
    }

    public function addSkill($data){
        return $this->skill->create($data);
    }

    public function addExperience($data){
        return $this->experiences->create($data);
    }

    public function updateExperience($exp_id, $data){
        return $this->experiences->where('id', '=', $exp_id)->update($data);
    }

    public function listCandidates(){
        return $this->jobSeekerModel->orderBy('created_at', 'desc')->get();
    }

    public function filterCandidate($filter){
        $candidates =  $this->jobSeekerModel
        ->when(Arr::get($filter, 'skill'), function($q1) use ($filter){
            $q1->with('skills', function($q2) use ($filter){
                $q2->where('skill', 'LIKE', '%'.Arr::get($filter, 'skill').'%');
            });
        })
        ->when(Arr::get($filter, 'experience'), function($q3) use ($filter){
            $q3->with('experiences', function($q4) use ($filter){
                $q4->where('title', 'LIKE', '%'.Arr::get($filter, 'experience').'%');
            });
        })
        ->get();

        $candidates = collect($candidates)->map(function($row) use ($filter){

            if(Arr::get($filter, 'skill') && Arr::get($filter, 'experience')){
                if(count($row->skills) > 0 || count($row->experiences) > 0){
                    return $row;
                }else {
                    return null;
                }
            }elseif(Arr::get($filter, 'skill')){
                if(count($row->skills) > 0){
                    return $row;
                }else {
                    return null;
                }
            }elseif(Arr::get($filter, 'experience')){
                if(count($row->experiences) > 0){
                    return $row;
                }else {
                    return null;
                }
            }
        })->whereNotNull();

        return $candidates;
    }


    public function getExperience($exp_id){
        return $this->experiences->find($exp_id);
    }

    
}