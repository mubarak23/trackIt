<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReportImage;
use App\Models\Report;
use App\Models\Project;
use App\Models\Image;

class ReportController extends Controller
{
    //
    public function report($project_id){
        //return $project_id;
        $project = Project::where('id', $project_id)->first();
        //return $project;
        $other_project = Project::all();
        return view('apps.report', ['project_details' => $project, 'other_projects' => $other_project]);
    }

    public function submit_report (Request $request){
        $this->validate($request, [
            'report' => 'required|max:255',
            'image' => 'required',
            'project_id' => 'required'
        ]);
        $data = $request->all();
        // save the image in cloundinary
        $response = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();
        // collect the url and add it to create report data
        $data['user_id'] = auth()->user()->id;
        $data['posted_by'] = auth()->user()->first_name;
        $store_report = $this->save_report($data);
        $data['report_id'] = $store_report->id;
        $store_report_image = $this->report_image($data);
        if(!$store_report && $store_report_image){
             return back()->with('status', 'Faild to create project at this time');
        }
       return redirect()->route('dashboard');
    }

    public function save_report($data){
        $report_action = Report::create($data);
        return $report_action;
    }

    public function report_image($data){
        $store_report_image = ReportImage::create($data);
        return $store_report_image;
    }
}
