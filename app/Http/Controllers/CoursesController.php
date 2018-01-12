<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

use App\Models\Course;

class CoursesController extends Controller
{
    public function showCourses() {
        $courses = Course::all();
        
        return View::make('pages/courses')->with('courses', $courses);
    }
}
