<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class JobSeeker extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'email',
        'password',
        'address',
        'contact'
    ];

    public function skills(){
        return $this->hasMany(Skills::class, 'candidate_id');
    }
}
