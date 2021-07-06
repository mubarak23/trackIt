@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
<div class="col-12 col-lg-3">
            <div class="left-column">
        <div class="card shadow-sm mb-4" >
            <div class="card-body">
                <h6 class="card-title">Prroject Details</h6>
                <p class="card-text text-justify"> <span class="h6">{{$project_details->title}}</p>
                <br>
                <p class="card-text text-justify"> <span class="h6">Location: {{$project_details->location}}</p>
                <br>
                <p class="card-text text-justify"> <span class="h6">Posted By: {{$project_details->posted_by}}</p>
                <br>
                <p class="card-text text-justify"> <span class="h6">Amount: {{$project_details->amount}}</p>
                <br>
                <p class="card-text text-justify"> <span class="h6">Category: Commiunity, local</p>
                <br>
                <p class="card-text text-justify"> <span class="h6">Tags: Fical Year, Budget, Constituency Project</p>
                <br>
                <p class="card-text text-justify"> <span class="h6">Date: {{$project_details->created_at}}</p>
                <br>
                <div class="btn btn-success"><a href="/report/{{$project_details->id}}">Submit a Report</a></div>
            </div>
        </div>
        </div>
</div>

<div class="col-12 col-lg-6" >
    <div class="card-body">
    <div class="media">
        <img src="{{url('/img/avatar-dhg.png')}}"  alt="img" width="55px" height="55px" class="rounded-circle mr-3">
        <div class="media-body">
            <h5>John Doe</h5>
            <div class="row">
                <div class="col-12 col-lg-4 col-md-4 col-sm-4">

                    <i class="fas fa-tags"></i>
                    Fical Year, Budget, Constituency

                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4">

                    <i class="fas fa-location fa-2x"></i>
                    {{$project_details->location}}
                </div>
                <div class="col-12 col-lg-4 col-md-4 col-sm-4">
                    <i class="far fa-times-circle fa-2x"></i>
                    {{$project_details->created_at}}
                </div>
            </div>
            <hr>
    <form method="POST" enctype='multipart/form-data' action="{{ route('submit_report') }}" >
    @csrf
     @if(session('status'))
        <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center ">
            {{ session('status') }}
         </div>
        @endif
        <div class="form-group">

            <textarea cols="10" rows="5" name="report" placeholder="Submit Project Report "
              class="form-control @error('report')
               border-red-500 @enderror" value="{{ old('report')}}"></textarea>
               @error('report')
               <div class="text-red-500 mt-2 text-sm ">
             {{ $message }}
         </div>
          @enderror
      </div>
      <div class="form-group">
        <label for="exampleFormControlFile1">Images</label>
          <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
      </div>
      <div class="form-group">
         <input type="hidden" name="project_id" value="{{$project_details->id}}" class="form-control-file" id="exampleFormControlFile1">
      </div>
      <div class="form-group">
           <button type="submit" class="btn btn-primary">Submit Report</button>
      </div>
        </form>
        </div>
    </div>
   </div>
</div>

 <div class="col-12 col-lg-3 col-md-3">

      <div class="left-column">
          <div class="card shadow-sm mb-4" >
            <div class="card-body">
               <p class="card-text text-justify"> <span class="h6">Other Related Projects(
        ftch by the tag of single project details)</p>
            </div>
        </div>
        <div class="card shadow-sm mb-4" >
            <div class="card-body">
                <h6 class="card-title">Prroject Details</h6>
                <p class="card-text text-justify"> <span class="h6">Makarfi Water Project Title</p>
                <br>
                <p class="card-text text-justify"> <span class="h6">Date: 31-03-2019</p>
            </div>
        </div>
        <div class="card shadow-sm mb-4" >
            <div class="card-body">
                <h6 class="card-title">Prroject Details</h6>
                <p class="card-text text-justify"> <span class="h6">Makarfi Water Project Title</p>
                <br>
                <p class="card-text text-justify"> <span class="h6">Date: 31-03-2019</p>
            </div>
        </div>
        </div>
    </div>

</div>
</div>
</div>
@endsection
