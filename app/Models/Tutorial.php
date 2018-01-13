<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    private $name;
    private $description;
    private $date;
    private $image;

    public function author(){
        return $this->belongsTo('App\Models\Author');
    }
}
