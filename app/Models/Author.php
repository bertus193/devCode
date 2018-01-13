<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $name;
    private $photo;

    public function tutorials(){
        return $this->hasMany('App\Models\Tutorial');
    }

    public function tvs(){
        return $this->hasMany('App\Models\Tv');
    }
}
