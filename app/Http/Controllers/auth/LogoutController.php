<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;

class LogoutController extends Controller
{
    //


    public function store() {
        //dd('Logout');
        auth()->logout();
        return redirect('/login');
    }


}
