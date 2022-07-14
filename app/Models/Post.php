<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];  
    protected $table="posts";
    protected $fillable = [
        'post_image', 'post_title','post_category', 'post_desc',
    ];

    protected $timestamps = false;
}
