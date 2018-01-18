<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

use App\Models\Course;

class WebController extends Controller
{
    public function showHome() {
        $courses = Course::all();
        return View::make('pages/public/principal')->with('courses', $courses);
    }

    public function showAdmin(){
        if($this->signed_in){
            return View::make('pages/admin/principal');
        }
        else{
            showHome();
        }
    }
}
