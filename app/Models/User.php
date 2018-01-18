<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'rank'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    public function courses()
    {
        return $this->belongsToMany('App\Models\Course', 'users_courses');
    }
}
