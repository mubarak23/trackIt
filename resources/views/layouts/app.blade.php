<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link rel="stylesheet" href="{{asset('css/style.css')}}" />
        <title>TrackIt</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}" />
        <!-- Styles -->
        <style>

        </style>
    </head>
    <title>Track It</title>
    <body class="bg-gray-50">

        <nav class="navbar navbar-expand-md navbar-dark mb-4" style="background-color:#3097D1">

        <button class="navbar-toggler" data-toggle="collapse" data-target="#responsive"><span class="navbar-toggler-icon"></span></button>


        <div class="collapse navbar-collapse" id="responsive">
            <ul class="navbar-nav mr-auto text-capitalize">
                <li class="nav-item"><a href="index.html" class="nav-link active">home</a></li>
                <li class="nav-item"><a href="#modalview" class="nav-link" data-toggle="modal">Communnity</a></li>
                <li class="nav-item"><a href="notification.html" class="nav-link">Report</a></li>
                @auth

                <li class="nav-item"><a href="{{ route('project') }}" class="nav-link">submit Project</a></li>
                <li class="nav-item"><a href="#" class="nav-link ">
                  <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button p-3>Logout</button>
                    </form>
                    </a></li>
                @endauth
                @guest
                <li class="nav-item"><a href="/auth/login" class="nav-link" data-toggle="modal">Register</a></li>
                <li class="nav-item"><a href="{{ route('auth') }}" class="nav-link">Login</a></li>
                @endguest
            </ul>

            <form action="" class="form-inline ml-auto d-none d-md-block">
                <input type="text" name="search" id="search" placeholder="Search" class="form-control form-control-sm">
            </form>
            <a href="notification.html" class="text-decoration-none" style="color:#CBE4F2;font-size:22px;"><i class="far fa-bell ml-3 d-none d-md-block"></i></a>
        </div>
    </nav>

        @yield('content')
    </body>

</html>
