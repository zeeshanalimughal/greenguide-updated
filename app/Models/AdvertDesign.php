<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvertDesign extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table ='advert_designs';
    protected $casts = [
        'advertSize' => 'array',
        'quantity' => 'array'
    ];

}
