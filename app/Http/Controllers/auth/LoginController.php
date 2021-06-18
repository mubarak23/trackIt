<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function __construct(){
        $this->middleware('guest');
    }

    public function index(){
        return view('apps.login');
    }

    public function  login(Request $request){
          $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|',
        ]);
     if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
         return back()->with('status', 'Invalid Login Details');
     }
        return redirect()->route('dashboard');
    }
}
