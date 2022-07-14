<?php

namespace App\Models\pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $table = "page_home";

    protected $fillable = [
        'b1_title',
        'b1_image',
        'b2_title',
        'b2_image',
        'b3_title',
        'b3_image',
        'b4_title',
        'b4_image',
        'b5_title',
        'b5_image',
        'dir_title',
        'dir_desc',
    ];
}
