<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

use App\Persona;

class homeController extends Controller
{
    public function index() {
        return View::make('home/principal');
    }
    
    public function listado() {
        $personas = Persona::all();
        
        return View::make('home/listado')->with('lista', $personas);
    }
}
