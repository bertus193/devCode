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
        return View::make('pages/login');
    }

    public function showProfile() {
        if(Auth::user()){
            return View::make('pages/profile');
        }
        
        return View::make('pages/login');
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
