<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpcommingIssues extends Model
{
    use HasFactory;
    protected $table = 'upcomming_issues';
    protected $guarded = [];
    
}
