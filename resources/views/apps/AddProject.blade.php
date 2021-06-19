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
            <form  method="POST" enctype='multipart/form-data' action="{{ route('addProject') }}">
                @csrf
                <div>
                    <input type="text" name="title" placeholder="Project Title"
                      class="form-control @error('title') border-red-500 @enderror"
                       value="{{ old('title')}}"/>
                    @error('title')
                    <div class="text-red-500 mt-2 text-sm ">
                     {{ $message }}
                    </div>
                    @enderror
                </div>
                <br>
                <div class="form-group">

                    <textarea cols="10" rows="5" name="description" placeholder="Project Description"
                     class="form-control @error('description')
                      border-red-500 @enderror" value="{{ old('description')}}"></textarea>
                      @error('description')
                    <div class="text-red-500 mt-2 text-sm ">
                     {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <label>Project Estimated Amount</label>
                    <input type="number" name="amount"
                      class="form-control @error('amount') border-red-500 @enderror"
                       value="{{ old('amount')}}"/>
                    @error('amount')
                    <div class="text-red-500 mt-2 text-sm ">
                     {{ $message }}
                    </div>
                    @enderror
                </div>
                <br>
                <div>
                    <label>Category</label>
                    <select class="form-control @error('category_id')
                      border-red-500 @enderror" value="{{ old('category_id')}}" name="category_id" id="exampleFormControlSelect2">
                    <option value="1">Community</option>
                    <option value="2">Budget</option>
                    <option value="3">Health</option>
                    <option value="4">Education</option>
                    <option value="5">Fetch from Categories table </option>
                    </select>
                    @error('category_id')
                    <div class="text-red-500 mt-2 text-sm ">
                     {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <label>Location</label>
                    <select class="form-control @error('location')
                      border-red-500 @enderror" value="{{ old('location')}}"
                    name="location" id="exampleFormControlSelect2" name="location">
                    <option value="kano">Kano</option>
                    <option value="benue">Benue</option>
                    <option value="edo">Edo</option>
                    <option value="kaduna">Kaduna</option>
                    <option value="lagos">Lagos</option>
                    <option value="jigawa">Jigawa</option>
                    </select>
                    @error('location')
                    <div class="text-red-500 mt-2 text-sm ">
                     {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <label>Address</label>
                    <input type="text" name="address" placeholder="Address"
                     class="form-control @error('address')
                      border-red-500 @enderror" value="{{ old('address')}}" />
                      @error('address')
                    <div class="text-red-500 mt-2 text-sm ">
                     {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Images</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
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
