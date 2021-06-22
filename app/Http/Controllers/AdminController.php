<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class AdminController extends Controller
{
    //

    public function index(){
        //fetch all project
        $projects = Project::paginate(5);
        return view('dashboard.index', ['projects' => $projects]);
    }
}
