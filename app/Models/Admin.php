<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    // use Notifiable;
    // protected $guard = 'admin';
        protected $table="admins";
        protected $fillable = [
            'name', 'email', 'password',
        ];

        protected $hidden = [
             'remember_token',
        ];
}
