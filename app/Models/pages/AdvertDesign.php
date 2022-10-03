<?php

namespace App\Models\Pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvertDesign extends Model
{
    use HasFactory;
    protected $table = 'page_advert_design';
    protected $casts = [
        'design_images' => 'array',
        'advert_sizes_images' => 'array'
    ];
}
