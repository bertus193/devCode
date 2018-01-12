<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

use App\Models\Course;

class homeController extends Controller
{
    public function showHome() {
        $courses = Course::all();
        return View::make('pages/principal')->with('courses', $courses);
    }
}
