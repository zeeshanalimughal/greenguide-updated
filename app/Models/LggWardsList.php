<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LggWardsList extends Model
{
    use HasFactory;
    protected $table ="lgg_wards_list";
    protected $fillable = ['ward_title'];
}
