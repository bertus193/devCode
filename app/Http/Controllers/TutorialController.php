<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\Tutorial;
use Datatables;

class TutorialController extends Controller
{
    public function showTutorials() {
        $tutorials = Tutorial::all();

        return View::make('pages/tutorials')->with('tutorials', $tutorials);
    }

    public function showTutorial($id) {
        $tutorial = Tutorial::find($id);
        return View::make('pages/tutorial')->with('tutorial', $tutorial);
    }

    public function getTutorials()
    {
    	$tutorials = Tutorial::all();
        return Datatables::of($tutorials)
        ->editColumn('name', '<a name="{{$name}}" href="{{ route("tutorial",["id"=>$id]) }}">{{$name}}</a>')->rawColumns(['name'])
        ->make(true);
    }

    public function deleteTutorial(Request $request){
        $id = $request->input('id');
        if ($request->isMethod('post')){
            $tutorial = Tutorial::find($id);
            if ($tutorial != null) {
                $tutorial->delete();
                return response()->json(['response' => 'OK']); 
            } else{
                return response()->json(['error' => 'No existe el tutorial indicado']); 
            } 
        }
        return response()->json(['error' => 'This is post method']);
    }
}
