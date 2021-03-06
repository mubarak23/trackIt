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
                @guest
         <div class="btn btn-success"><a href="/auth/login">Login and submit a report</a></div>
       @endguest
       @auth
           <div class="btn btn-success"><a href="/report/{{$project_details->id}}">Submit a Report Here</a></div>
       @endauth

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
                    Fical Year, Budget, Constituency Project

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
             <p class="card-text text-justify"> <span class="h6">{{$project_details->title}}</p>
            <p class="card-text text-justify">{{$project_details->description}}</p>
            <div class="row no-gutters mb-3">
                <div class="col-6 p-1 text-center">
                        <img src="{{url('/img/adventure-alps-clouds-2259810.jpg')}}"  alt="" class="img-fluid mb-2">
                        <img src="{{url('/img/aerial-view-architectural-design-buildings-2228123.jpg')}}"  alt="" class="img-fluid">
                </div>
                <div class="col-6 p-1 text-center">

                        <img src="{{url('/img/celebration-colored-smoke-dark-2297472.jpg')}}"  alt="" class="img-fluid mb-2">
                        <img src="{{url('/img/bodybuilding-exercise-fitness-2294361.jpg')}}" alt=""class="img-fluid">
                </div>
            </div>
            <hr>
            <br>
            <h6 class="card-title"> Project Report</h6>
            @if($project_details->reports->count())
        @foreach ($project_details->reports as  $reports)
            <div class="media mb-3">
                    <img src={{url('img/avatar-dhg.png')}} alt="img" width="45px" height="45px" class="rounded-circle mr-2">
                    <div class="media-body">
                            <p class="card-text text-justify">{{$reports->report}}</p>
                            <div class="row no-gutters mb-3">
                                 @foreach ($reports->images as  $image)
                       <div class="col-6 p-1 text-center">
                        <img src="{{url($image->image_url)}}" alt="" class="img-fluid mb-2">
                        </div>
                        @endforeach
            </div>
            </div>
            </div>
            @endforeach

     @else
      <p>There are no Project Report at the moment</p>
       @guest
         <div class="btn btn-success"><a href="/auth/login">Login and submit a report</a></div>
       @endguest
       @auth
           <div class="btn btn-success"><a href="/report/{{$project_details->id}}">Submit a Report Here</a></div>
       @endauth

     @endif
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
         @if($other_projects->count())
        @foreach ($other_projects as  $other_project)
        <div class="card shadow-sm mb-4" >
            <div class="card-body">
                <h6 class="card-title">Prroject Details</h6>
                <p class="card-text text-justify"> <span class="h6">{{$other_project->title}}</p>
                <br>
                <p class="card-text text-justify"> <span class="h6">Date Posted: {{ $other_project->created_at}}</p>
            </div>
        </div>
        @endforeach
        @else
        <p>Other Related Projects</p>
        @endif
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
