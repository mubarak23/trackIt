<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event\ProjectAction;
use App\Models\Category;
use App\Models\Project;
use App\Models\Image;

class ProjectController extends Controller
{
    //

    public function index(){
        //fetch all categories
        $categories = Category::all();

        return view('apps.addproject', ['categories' => $categories]);
    }

     public function single_project($proiject_id){
       //user_id
       $project_details = Project::where('id', $proiject_id)->where('user_id', auth()->user()->id)->first();
       if(!$project_details){
           return back()->with('status', 'Project with the provided id does not exist');
       }
       //return $project_details;
       return view('apps.project', ['project_details'=> $project_details]);
   }


    public function store_project(Request $request){
            $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'category_id' => 'required',
            'location' => 'required',
            'address' => 'required',
            'image' => 'required',
            "amount" => "required"
        ]);
        $data = $request->all();

        // collect the need data for prrojeect save
        $data['user_id'] = auth()->user()->id;
        $data["posted_by"] = auth()->user()->first_name;
        // 1. save the  project data
        $project = $this->store_action($data);

        // 2. save image in clounddary and get url
        $response = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();
        //dd($response);
        // 3. collect project id and url
        $data["project_id"] = $project->id;
        $data["image_url"] = $response;
        //4.  save project iimages
        $store = $this->project_image($data);
        //  5. returnn the right response
        if(!$project && $store){
            return back()->with('status', 'Faild to create project at this time');
        }
        //event(new ProjectAction($project, self::CREATED));
        return redirect()->route('dashboard');

    }

    public function store_action($data){
        $create_project = Project::create($data);
        return $create_project;
    }

    public function project_image($data){
        $store = Image::create($data);
        return $store;
    }

    public function projects(){
        $projects = Project::all();
        return $projects;
    }


}
