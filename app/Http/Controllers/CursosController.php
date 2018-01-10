<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

use App\Models\Curso;

class CursosController extends Controller
{
    public function showCursos() {
        $cursos = Curso::all();
        
        return View::make('pages/cursos')->with('cursos', $cursos);
    }
}
