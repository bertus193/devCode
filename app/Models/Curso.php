<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    private $name;

    private $descripcion;

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'users_cursos');
    }
}
