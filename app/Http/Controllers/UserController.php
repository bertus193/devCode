<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Session;
use App\Http\Requests;

class UserController extends Controller
{
    public function showLogin() {
        $data = Session::get('email');
        return View::make('pages/login')->with('cursos', $data);
    }

    public function doLogin(Request $request){
        if ($request->isMethod('post')){
            return response()->json(['response' => 'This is post method']); 
        }

        return response()->json(['response' => 'This is get method']);
    }
}
