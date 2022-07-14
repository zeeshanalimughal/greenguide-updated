<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['fname','lname','dob','gender','phone','address','city','zip','email','nationality','current_right_work_status','has_experience','has_driving_license','other_information','cv','status','has_driving_license','job_role','has_own_car',
    ];

    
}
