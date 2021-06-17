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
                            <h5 class="card-title">Dave Gamache</h5>
                            <p class="card-text text-justify mb-2">I wish i was a little bit taller, wish i was a baller, wish i had a girl… also.</p>
                            <ul class="list-unstyled nav justify-content-center">
                               <a href="#" class="text-dark text-decoration-none"> <li class="nav-item">Friends <br> <strong>12M</strong></li></a>
                              <a href="#" class="text-dark text-decoration-none"> <li class="nav-item">Enimes <br> <strong>1</strong></li></a>
                            </ul>
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
        <h2>My Recent Project Report</h2>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-12 col-lg-4 col-md-4 col-sm-12">
        <div class="item-1">
           <a href="#" data-lightbox="id">
            <img src={{URL::asset('img/mid1.jpg')}}
            alt="" class="img-fluid" style="width:455px; height: 255px;"></a>
            <p>Primary Health Care Building Project Chikun</p>
            <div class="btn btn-primary">View Full Details</div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-md-4 col-sm-12">
        <div class="item-1">
           <a href="#" data-lightbox="id">
            <img src={{URL::asset('img/mid1.jpg')}} alt="" class="img-fluid" style="width:455px; height: 255px;"></a>
            <p>Kaura Primary School Renovation</p>
            <div class="btn btn-primary">View Full Details</div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-md-4 col-sm-12">
        <div class="item-1">
           <a href="#" data-lightbox="id">
            <img src={{URL::asset('img/mid1.jpg')}}  alt="" class="img-fluid" style="width:455px; height: 255px;"></a>
            <p>Makarfi Water Project</p>
            <div class="btn btn-primary">View Full Details</div>
        </div>
    </div>

    <div class="col-12 col-lg-4 col-md-4 col-sm-12">
        <div class="item-1">
           <a href="#" data-lightbox="id">
            <img src={{URL::asset('img/mid1.jpg')}}
            alt="" class="img-fluid" style="width:455px; height: 255px;"></a>
            <p>Primary Health Care Building Project Chikun</p>
            <div class="btn btn-primary">View Full Details</div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-md-4 col-sm-12">
        <div class="item-1">
           <a href="#" data-lightbox="id">
            <img src={{URL::asset('img/mid1.jpg')}}
            alt="" class="img-fluid" style="width:455px; height: 255px;"></a>
            <p>Primary Health Care Building Project Chikun</p>
            <div class="btn btn-primary">View Full Details</div>
        </div>
    </div>
    <div class="col-12 col-lg-4 col-md-4 col-sm-12">
        <div class="item-1">
           <a href="#" data-lightbox="id">
            <img src={{URL::asset('img/mid1.jpg')}}
            alt="" class="img-fluid" style="width:455px; height: 255px;"></a>
            <p>Primary Health Care Building Project Chikun</p>
            <div class="btn btn-primary">View Full Details</div>
        </div>
    </div>

</div>
</div>
</div>
</div>
@endsection
