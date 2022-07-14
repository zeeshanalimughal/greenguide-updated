<?php

namespace App\Models\pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = "page_about";
    protected $fillable = [
        'ab_image',
        'ab_title',
        'ab_desc1',
        'ab_desc2',
        'ab_box1',
        'ab_box2',
        'ab_box3',
        'ab_company',
        'ab_company_qt',
    ];
}
