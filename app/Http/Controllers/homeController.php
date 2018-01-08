<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

use App\Curso;

class homeController extends Controller
{
    public function index() {
        return View::make('pages/principal');
    }
    
    public function cursos() {
        $cursos = Curso::all();
        
        return View::make('pages/cursos')->with('cursos', $cursos);
    }
}
