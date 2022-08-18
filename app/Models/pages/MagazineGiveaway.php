<?php

namespace App\Models\pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MagazineGiveaway extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'page_magazine_giveaway';

    protected $casts = [
        'section3_gift_images' => 'array'
    ];

}
