<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;
use App\Models\User;
use Hash;

class RegisterController extends Controller
{
    //

    public function __construct(){
        $this->middleware('guest');
    }

    public function index(){
        return view('apps.register');
    }


    public function register(Request $request){
          $this->validate($request, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email',
            'phone_number' => 'required',
            'state' => 'required',
            'lga' => 'required',
            'address' => 'required',
            'password' => 'required|confirmed',
            'picture' => 'required',
        ]);
        $data = $request->all();
        if($request->hasFile('picture')){
            $upload_profile = $this->cloundary_image_upload($request->hasFile('picture'));
        }
        $data['user_pic'] = $upload_profile['url'];
        $data['password'] = Hash::make($data['password']);
        //fetch all roles and loop through and pick only role with name as user
        $data['user_role_id'] = 2;
        $new_user_account = $this->store_action($data);
        if(!$new_user_account){
            return back()->with('status', 'Unabled to create a New Account at this time');
        }
        auth()->attempt($request->only('email', 'password'));
        return redirect()->route('dashboard');
    }


  public function cloundary_image_upload($file){
        Cloudder::upload($request->file('image'));
        $cloundary_upload = Cloudder::getResult();
        return $cloundary_upload;
  }


  public function store_action($data){
        $create_user_account = User::create($data);
        return $create_user_account;
  }


}
