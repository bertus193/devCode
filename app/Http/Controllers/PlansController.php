<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\Plan;

class PlansController extends Controller
{
    public function showPlan() {
        $plans = Plan::all();
        return View::make('pages/plans')->with('plans', $plans);
    }
}
