<?php

namespace App\Models;

use App\Models\Businessdirectory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectoryReview extends Model
{
    use HasFactory;
    protected $table = 'directory_reviews';

    protected  $fillable = [
        'userId',
        'directoryId',
        'website',
        'rating',
        'review',
        'review_status',
    ];

    public function reviewReply(){
        return $this->hasMany(ReviewReply::class,'directoryId', 'id');
    }

    public function directoryReview()
    {
        return $this->belongsTo(Businessdirectory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
