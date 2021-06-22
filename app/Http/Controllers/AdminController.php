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
        foreach ($projects as  $project){
            $data['category'] = $project->category[0]['name'];
       }
        //return $data;
        return view('dashboard.index', ['projects' => $projects]);
    }
}
