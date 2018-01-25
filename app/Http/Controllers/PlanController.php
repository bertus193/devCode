<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\Plan;

class PlanController extends Controller
{
    public function showPlans() {
        $plans = Plan::all();
        return View::make('pages/plans')->with('plans', $plans);
    }

    public function showPlan($id) {
        $plan = Plan::find($id);
        return View::make('pages/plan')->with('plan', $plan);
    }
}
