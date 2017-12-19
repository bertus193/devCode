<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

use App\User;

class homeController extends Controller
{
    public function index() {
        return View::make('home/principal');
    }
    
    public function listado() {
        $users = User::all();
        
        return View::make('home/listado')->with('lista', $users);
    }
}
