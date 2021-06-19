<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //

    public function index(){
        //fetch all categories
        // fetch all tags
        return view('apps.addproject');
    }
}
