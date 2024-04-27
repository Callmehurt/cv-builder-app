<?php
namespace App\Repositories;
use App\Models\Experiences;
use App\Models\JobSeeker;
use App\Models\Skills;

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

    public function addSkill($data){
        return $this->skill->create($data);
    }

    
}