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
    ];
}
