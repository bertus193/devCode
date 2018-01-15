<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tv extends Model
{
    private $name;
    private $description;
    private $array_tags;
    private $url;
    private $image;

    public function author(){
        return $this->belongsTo('App\Models\Author');
    }
}
