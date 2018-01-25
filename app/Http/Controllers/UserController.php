<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{

    public function showLogin() {
        if($this->user == null){
            return View::make('pages/public/login');
        }

        return redirect()->route('user.profile');
    }

    public function showProfile() {
        if($this->user != null){
            return View::make('pages/user/profile');
        }
        
        return redirect()->route('user.login.get');
    }

    public function showRegister() {
        if($this->user == null){
            return View::make('pages/public/register');
        }

        return redirect()->route('user.profile');
    }

    public function doRegister(Request $request){
        if ($request->isMethod('post')){
            $email = $request->input('email');
            $rank = 0;
            $plan_id = 3;
            if(User::where('email',$email)->count() == 0){
                $user = new User();
                $user->name = $request->input('name');
                $user->email = $email;
                $user->rank = $rank;
                $user->password = bcrypt($request->input('password'));
                $user->plan_id = $plan_id;
                $user->save();
                return response()->json(['response' => 'OK']);
            }
            else{
                return response()->json(['error' => 'Email no válido']);
            }
        }
        else{
            return response()->json(['error' => 'This is post method']);
        }
    }

    public function doLogin(Request $request){
        if ($request->isMethod('post')){

            $userData = array(
                "email"       => $request->input('email'),
                'password'    => $request->input('password')
            );
            if (Auth::attempt($userData, $request->input('remember-me'))) {
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

    public function doPay(Request $request, $id){
        if ($request->isMethod('post')){
          $user = $this->user;
          $user->rank = 1;
          $user->plan_id = $id;
          $user->save();
          return response()->json(['response' => 'OK']);
        }
        return response()->json(['error' => 'This is post method']);
    }

    public function leaveCourse(Request $request, $id){
        $this->user->courses()->detach($id);
        return response()->json(['response' => 'OK']);
    }

    public function joinCourse(Request $request, $id){
        $this->user->courses()->attach($id);
        return response()->json(['response' => 'OK']);
    }
}
