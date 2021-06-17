@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
<div class="col-12 col-lg-3">
            <div class="left-column">
                    <div class="card card-left1 mb-4" >

                        <img src="{{URL::asset('img/photo-1455448972184-de647495d428.jpg')}}" alt="" class="card-img-top img-fluid">

                        <div class="card-body text-center ">
                            <img src="img/avatar-dhg.png" alt="img" width="120px" height="120px" class="rounded-circle mt-n5">
                            <br>
                            <h5 class="card-title">John Doe</h5>
                            <p class="card-text text-justify mb-2">A better sociaty start with,
                                been the change i want to see in the world</p>

                        </div>
                    </div>
                    <div class="card shadow-sm card-left2 mb-4">
                        <div class="card-body">
                                <h5 class="mb-3 card-title">About <small><a href="#" class="ml-1">Edit</a></small></h5>

                                <p class="card-text"> <i class="fas fa-calendar-week mr-2"></i> Went to <a href="#" class="text-decoration-none">oh canada</a></p>

                                <p class="card-text"> <i class="fas fa-user-friends mr-2"></i> Become a friend with <a href="#" class="text-decoration-none">obama</a></p>
                                <p class="card-text"> <i class="far fa-building mr-2"></i> Work at <a href="#" class="text-decoration-none">Github</a></p>
                                <p class="card-text"> <i class="fas fa-home mr-2"></i> Live in <a href="#" class="text-decoration-none">San francisco</a></p>
                                <p class="card-text"> <i class="fas fa-map-marker mr-2"></i> From <a href="#" class="text-decoration-none">Seattle, WA</a></p>
                        </div>
                    </div>
                </div>
</div>

<div class="col-12 col-lg-9" >
<div class="row">
    <div class="col-12 col-lg-12 col-md-12 col-sm-12 center">
        <p class="card-text text-justify"> <span class="h6">New Project</p>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-12 col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <form  method="POST" action="#" accept="context-type">
                <div>
                    <input type="text" name="title" placeholder="Project Title"  class="form-control"/>
                </div>
                <br>
                <div class="form-group">

                    <textarea cols="10" rows="5" name="description" placeholder="Project Description" class="form-control"></textarea>
                </div>
                <div>
                    <label>Category</label>
                    <select class="form-control" id="exampleFormControlSelect2">
                    <option>Community</option>
                    <option>Budget</option>
                    <option>Health</option>
                    <option>Education</option>
                    <option>Fetch from Categories table </option>
                    </select>
                </div>
                <div>
                   <label>Tags</label>
                </div>
                <div class="form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    value="local"
                    id="flexCheckDefault"
                />
                <label class="form-check-label" for="flexCheckDefault">
                    Local
                </label>
                </div>
                <!-- Checked checkbox -->
                <div class="form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    value="community"
                    id="flexCheckChecked"
                    checked
                />
                <label class="form-check-label" for="flexCheckChecked">
                    Community
                </label>
                </div>
                <div>
                    <label>Location</label>
                    <select class="form-control" name="location" id="exampleFormControlSelect2">
                    <option>Kano</option>
                    <option>Benue</option>
                    <option>Edo</option>
                    <option>Kaduna</option>
                    <option>Lagos</option>
                    <option>Jigawa</option>
                    </select>
                </div>
                <div>
                    <label>Address</label>
                    <input type="text" name="adddress" placeholder="Address"  class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Images</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <br>
                <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Add Project</button>
                </div>
            </div>
            </form>
        </div>
    </div>

    </div>
</div>


</div>
</div>
@endsection
