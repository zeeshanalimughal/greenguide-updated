<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeGallery extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'home_gallery';
    protected $casts = [
        'images' => 'array'
    ];


}
