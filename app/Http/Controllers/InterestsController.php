<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\Interest;

class InterestsController extends Controller
{
    public function showInterest() {
        $interests = Interest::all();
        return View::make('pages/interests')->with('interests', $interests);
    }
}
