<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobseeker extends Model
{
    use HasFactory;
    protected $fillable = [
    'user_id',
    'Birthday',
    'Nationality',
    'Linkdin_url',
    'Town_of_residence',
    'Gender',
    'Civility',
    'Level_of_education',
    'Field_of_study',
    'School',
    'School_location',
    'from_year',
    'to_year',
    'resume',
    ];

}
