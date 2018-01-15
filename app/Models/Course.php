<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    private $name;

    private $description;

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'users_courses');
    }

    public function topics()
    {
        return $this->hasMany('App\Models\Topic');
    }
}
