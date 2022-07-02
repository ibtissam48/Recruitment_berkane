<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recruiter extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'Company_Name',
        'line_of_business',
        'Workforce_number',
        'City',
        'Phone_Number',
        'Commercial_Register',
    ];
}
