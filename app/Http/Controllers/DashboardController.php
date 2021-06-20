<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class DashboardController extends Controller
{
    //

    //public function __construct(){
      //  $this->middleware(['auth']);
   // }

   //{{ URL::to('/') }}/img/photo-1455448972184-de647495d428.jpg
   // {{URL::asset('/img/photo-1455448972184-de647495d428.jpg')}}
   // {{url('/img/avatar-dhg.png')}}
   //return $data;
        //$project = Project::find(4);
        //return $project->images[0]['image_url'];
        //->image_url;
    //foreach ($user_projects as  $project){
     //       $data['images'] = $project->images[0]['image_url'];
     //   }



    public function index(){
        //fetch user submitted project
        $user_projects = Project::where('user_id', auth()->user()->id)->paginate(1);
        //$delete = Project::find(3)->delete();
        // fetch the last 10 project submitted on the platform


        $other_projects = Project::where('category_id', 3)->get();

        return view('apps.index', ['user_projects'=> $user_projects, 'other_projects' => $other_projects]);
    }
}
