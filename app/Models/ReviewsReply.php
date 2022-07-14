<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewsReply extends Model
{
    use HasFactory;
    protected $table = 'reviews_reply';
    protected $fillable = [
        'userId',
        'directoryId',
        'reviewId',
        'reply',
        'reply_status',
    ];

    public function directoryReview()
    {
        return $this->belongsTo(Businessdirectory::class);
    }

    public function reviewReply()
    {
        return $this->belongsTo(DirectoryReview::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
