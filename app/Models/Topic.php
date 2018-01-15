<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    private $name;

    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}
