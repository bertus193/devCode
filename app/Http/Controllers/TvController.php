<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\Tv;

class TvController extends Controller
{
    public function showTv() {
        $tvs = Tv::all();

        return View::make('pages/tvs')->with('tvs', $tvs);
    }
}
