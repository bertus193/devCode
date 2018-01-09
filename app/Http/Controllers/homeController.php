<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

use App\Curso;

class homeController extends Controller
{
    public function showHome() {
        $cursos = Curso::all();
        return View::make('pages/principal')->with('cursos', $cursos);
    }
}
