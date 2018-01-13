<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

use App\Models\Course;

use Datatables;

class CoursesController extends Controller
{
    public function showCourses() {
        $courses = Course::all();
        
        return View::make('pages/courses')->with('courses', $courses);
    }

    public function getCourses()
    {
    	$courses = Course::all();
        return Datatables::of($courses)
        ->editColumn('name', '<a href="{{ route("course",["id"=>$id]) }}">{{$name}}</a>')->rawColumns(['name'])
        ->make(true);
    }

    public function showCourse($id) {
        $course = Course::find($id);
        return View::make('pages/course')->with('course', $course);
    }
}
