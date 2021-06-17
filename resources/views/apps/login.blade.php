@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
        <div class="col-md-4 offset-md-4">
        <div class="card shadow-sm mb-4 p-3">
            <form class="form-signin">
      <div class="form-label-group pb-3">
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      </div>

      <div class="form-label-group pb-3">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

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
