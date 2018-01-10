<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLogin() {
        $data = Session::get('email');
        return View::make('pages/login')->with('cursos', $data);
    }

    public function doLogin(Request $request){
        if ($request->isMethod('post')){

            $userData = array(
                "email"       => $request->input('email'),
                'password'    => $request->input('password')
            );
            if (Auth::attempt($userData)) {
                return response()->json(['response' => 'OK']); 
            } else{
                return response()->json(['error' => 'Login incorrecto']); 
            }
            
            
            
        }
        return response()->json(['error' => 'This is post method']);
    }


    public function doLogout(Request $request){
        Auth::logout();
    }
}
