<?php

namespace App\Models\pages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    use HasFactory;
    protected $table = "page_advertise";
    protected $casts = [
        'add_services_images' => 'array'
    ];

}
