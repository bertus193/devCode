<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\Tutorial;

class TutorialController extends Controller
{
    public function showTutorials() {
        $tutorials = Tutorial::all();

        return View::make('pages/tutorials')->with('tutorials', $tutorials);
    }

    public function showTutorial($id) {
        $tutorial = Tutorial::find($id);
        return View::make('pages/tutorial')->with('tutorial', $tutorial);
    }
}
