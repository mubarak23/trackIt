<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ProjectController extends Controller
{
    //

    public function index(){
        //fetch all categories
        $categories = Category::all();
        return view('apps.addproject', ['categories' => $categories]);
    }

    public function store_project(Request $request){
            $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'amount' => 'required',
            'category_id' => 'required',
            'location' => 'required',
            'address' => 'required',
            'picture' => 'required',
        ]);
        $data = $request->all();
        return $data;
    }
}
