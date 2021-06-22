<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    // all thing equal

    public function index(){
        return view('apps.login');
    }

    public function login(Request $request){
          $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|',
        ]);
        //return $request->all();
     if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
         return back()->with('status', 'Invalid Login Details');
     }
     //auth()->user()->i
     if(auth()->user()->user_role_id == 1){
        return redirect()->route('admin');
     }
        return redirect()->route('dashboard');
    }
}
