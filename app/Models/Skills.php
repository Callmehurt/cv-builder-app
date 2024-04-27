<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id',
        'skill'
    ];

    public function candidate(){
        return $this->belongsTo(JobSeeker::class, 'candidate_id');
    }
}
