@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
<div class="col-12 col-lg-3">
            <div class="left-column">
                    <div class="card card-left1 mb-4" >

                        <img src="{{url('/img/photo-1455448972184-de647495d428.jpg')}}" alt="" class="card-img-top img-fluid">

                        <div class="card-body text-center ">
                            <img src="{{url('/img/avatar-dhg.png')}}" alt="img" width="120px" height="120px" class="rounded-circle mt-n5">
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

<div class="col-12 col-lg-6" >
        <div class="middle-column">
            <div class="card" >
            <div class="card-body bg-success text-white">
            <div class="media">
                <div class="media-body">
                        <p class="text-justify"><h1 class="text-dark">What's going on in your community</h1>
Let everyone know about the status of project execution in your communnity.
Start a conversation around something important in your community.</p>
                </div>
            </div>
    </div>
<hr>
<hr>
          <div class="card-header bg-transparent">
                         <form class="form-inline">
                            <div class="input-group w-100">
                                <img src="{{url('/img/avatar-dhg.png')}}" alt="img" width="55px" height="55px" class="rounded-circle mr-3">
                                <input type="text" name="message" id="message" placeholder="Find A Project in Your Community and Report" class="form-control form-control-md">
                         </div>
                    </form>
            </div>
      @if($user_projects->count())
        @foreach ($user_projects as  $project)
   <div class="card-body">
    <div class="media">
        <img src="{{ url(auth()->user()->user_pic) }}" alt="img" width="70px" height="70px" class="rounded-circle mr-3">
        <div class="media-body">
            <h5>{{$project->posted_by}}</h5>
            <p class="card-text text-justify"><a href="/project/{{$project->id}}"><span class="h6">{{$project->title}}</span></a></p>
            <p class="card-text text-justify">{{$project->description}}</p>
            <div class="row no-gutters mb-3">
                <div class="col-6 p-1 text-center">
                        <img src="{{url($project->images[0]['image_url'])}}" alt="" class="img-fluid mb-2">
                        <img src="{{url('/img/aerial-view-architectural-design-buildings-2228123.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-6 p-1 text-center">

                        <img src="{{url($project->images[0]['image_url'])}}" alt="" class="img-fluid mb-2">
                        <img src="{{url('/img/bodybuilding-exercise-fitness-2294361.jpg')}}" alt=""class="img-fluid">
                </div>
            </div>

            <div class="media mb-3">
                    <img src="{{url('/img/avatar-dhg.png')}}" alt="img" width="45px" height="45px" class="rounded-circle mr-2">
                    <div class="media-body">
                            <p class="card-text text-justify">Jacon Thornton: Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis.</p>
                    </div>
            </div>
            <div class="media">
                    <img src="{{url('/img/avatar-mdo.png')}}" alt="img" width="45px" height="45px" class="rounded-circle mr-2">
                    <div class="media-body">
                            <p class="card-text text-justify">Mark Otto: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

                    </div>
            </div>
        </div>
        <small>5min</small>
    </div>
   </div>
   @endforeach
        {{ $user_projects->links() }}
     @else
      <p>There are no Projects</p>
     @endif
 <hr>

 </div>
 </div>
</div>



<div class="col-12 col-lg-3">


    <div class="right-column">

        <div class="card shadow-sm mb-4" >
            <div class="card-body">
                <h6 class="card-title">Sponsored</h6>
                <img src="{{url('/img/right1.jpg')}}" alt="card-img" class="card-img mb-3">
                <p class="card-text text-justify"> <span class="h6">It might be time to visit Iceland.</span> Iceland is so chill, and everything looks cool here. Also, we heard the people are pretty nice.  What are you waiting for?</p>
                <a href="#" class="btn btn-outline-info card-link btn-sm">Buy a ticket</a>


            </div>

        </div>


        <div class="card shadow-sm mb-4">
            <div class="card-body">

                    <h6 class="card-title ">Likes <a href="#" class="ml-1"><small>.View All</small> </a> </h6>
                    <div class="row no-gutters d-none d-lg-flex">
                        <div class="col-6 p-1">
                                <img src="{{url('/img/avatar-dhg.png')}}" alt="img" width="80px" height="80px" class="rounded-circle mb-4">
                                <img src="{{url('/img/avatar-fat.jpg')}}" alt="img" width="80px" height="80px" class="rounded-circle">



                        </div>
                        <div class="col-6 p-1 text-left">
                            <h6>Jacob Thornton @fat</h6>
                            <a href="#" class="btn btn-outline-info btn-sm mb-3"><i class="fas fa-user-friends"></i>Follow </a>

                            <h6>Mark otto</h6>
                            <a href="#" class="btn btn-outline-info  btn-sm"><i class="fas fa-user-friends"></i>Follow </a>

                        </div>

                    </div>

            </div>

            <div class="card-footer">

                <p class="lead" style="font-size:18px;">Dave really likes these nerds, no one knows why though.</p>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <p>&copy; 2021 TracIt
                        <a href="#">About</a>
                        <a href="#">Help</a>
                        <a href="#">Terms</a>
                        <a href="#">Privacy</a>
                        <a href="#">Cookies</a>
                        <a href="#">Ads </a>
                        <a href="#">Info</a>
                        <a href="#">Brand</a>
                        <a href="#">Blog</a>
                        <a href="#">Status</a>
                        <a href="#">Apps</a>
                        <a href="#">Jobs</a>
                        <a href="#">Advertise</a>
                </p>
            </div>

        </div>
    </div>

    </div>
</div>
</div>
@endsection
