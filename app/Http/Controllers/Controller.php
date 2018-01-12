<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $user = null;
    private $signed_in = false;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->signed_in = Auth::check();
            if($this->signed_in){
                $this->user = User::find(Auth::user()->id);
            }

            view()->share('signed_in', $this->signed_in);
            view()->share('user', $this->user);

            return $next($request);
        });

    }
}
