<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event\ProjectAction;
use App\Models\Category;
use App\Models\Project;
use App\Models\Image;

class HomeController extends Controller
{
    //

    public function index(){
        $projects = Project::paginate(6);
        return view('apps.home', ['projects' => $projects]);
    }


}
