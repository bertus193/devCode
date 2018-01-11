<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\Tutorial;

class TutorialsController extends Controller
{
    public function showTutorials() {
        $tutorials = Tutorial::all();

        return View::make('pages/tutorials')->with('tutorials', $tutorials);
    }
}
