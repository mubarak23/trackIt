<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReportImage;
use App\Models\Project;
use App\Models\Image;
class ReportController extends Controller
{
    //

    public function index($project_id){
        $project = Project::where('id', $project_id)->first();

    }
}
