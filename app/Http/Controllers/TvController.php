<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\Tv;

class TvController extends Controller
{
    public function showTvs() {
        $tvs = Tv::all();

        return View::make('pages/public/tvs')->with('tvs', $tvs);
    }

    public function showTv($id) {
        $tv = Tv::find($id);
        return View::make('pages/public/tv')->with('tv', $tv);
    }
}
