<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;
   public  $timestamps = false;

    protected $table = 'user_details';
    public function user(){
        return $this->belongsTo(User::class);
    }
    protected  $fillable = ['userId','company_name','company_reg_no','phone','charity_number',';billing_Address'];
}
