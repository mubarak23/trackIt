@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
        <div class="col-md-8 offset-md-3">
        <div class="card shadow-sm mb-4 p-3">
            <form class="form-signin"  method="POST"
             action="{{ route('login') }}" >
            @csrf
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
