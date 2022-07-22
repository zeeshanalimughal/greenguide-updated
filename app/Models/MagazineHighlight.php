<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MagazineHighlight extends Model
{
    protected $guarded = [];  
    protected $table="magazine_highlights";
    use HasFactory;
}
