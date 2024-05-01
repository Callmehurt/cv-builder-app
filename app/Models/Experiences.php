<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'employment_type',
        'company_name',
        'location',
        'location_type',
        'start_date',
        'end_date',
        'candidate_id'
    ];

    public function jobSeeker(){
        return $this->belongsTo(JobSeeker::class, 'candidate_id');
    }
}
