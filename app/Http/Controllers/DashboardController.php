<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    //public function __construct(){
      //  $this->middleware(['auth']);
   // }


    public function index(){
        //fetch user submitted project
        // fetch the last 10 project submitted on the platform
        return view('apps.index');
    }
}
