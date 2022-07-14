<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
   public  $timestamps = false;
    protected $casts = [
        'eventImages' => 'array'
    ];
    protected $fillable = [
        'userId',
        'event_title',
        'event_category',
        'event_date',
        'event_time',
        'event_start_date',
        'event_start_date',
        'event_location',
        'event_website',
        'event_description',
        'event_main_image',
        'eventImages',
        'event_status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
