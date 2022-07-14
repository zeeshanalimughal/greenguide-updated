<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessDirectory extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    protected $table = 'business_directorys';
    protected $casts = [
        'social' => 'array',
        'company_images' => 'array',
    ];

    public function userReview(){
        return $this->hasMany(DirectorReview::class,'directoryId', 'id');
    }
    public function reviewReply(){
        return $this->hasMany(ReviewReply::class,'directoryId', 'id');
    }


}
