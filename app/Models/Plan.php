<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    private $type;
    private $monthly_price;
    private $total_price;
    private $months;
    private $benefits;

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
