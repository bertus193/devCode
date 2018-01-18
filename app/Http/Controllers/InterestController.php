<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\Interest;

class InterestController extends Controller
{
    public function showInterest() {
        $interests = Interest::all();
        return View::make('pages/user/interests')->with('interests', $interests);
    }
}
