@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
        <div class="col-md-8 offset-md-3">
        <div class="card shadow-sm mb-4 p-3">
            <form class="form-signin"  method="POST"
             action="{{ route('login') }}" >
            @csrf
       @if(session('status'))
            <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center ">
                    {{ session('status') }}
            </div>
         @endif
      <div class="form-label-group pb-3">
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
      </div>

      <div class="form-label-group pb-3">
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

      </div>

      <div class="checkbox mb-2">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login in</button>

    </form>
        </div>

        </div>

    </div>
</div>
@endsection



<form method="POST" enctype='multipart/form-data' action="{{ route('addProject') }}" >
            @csrf
                @if(session('status'))
            <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center ">
                    {{ session('status') }}
            </div>
            @endif
            <div>
                <div class="form-group">
                    <label>Project Report</label>
                    <textarea cols="10" rows="5" name="report" placeholder="Submit Project Report "
                     class="form-control @error('report')
                      border-red-500 @enderror" value="{{ old('report')}}"></textarea>
                      @error('report')
                    <div class="text-red-500 mt-2 text-sm ">
                     {{ $message }}
                    </div>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Images</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <br>
                <div class="form-group">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit Report</button>
                </div>
            </div>
        </form>
