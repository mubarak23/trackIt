@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
        <div class="col-md-8 offset-md-3">
        <div class="card shadow-sm mb-4 p-3">
            <form class="form-signin" method="POST" enctype='multipart/form-data' action="{{ route('auth_admin') }}">
            @csrf
            @if(session('status'))
            <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center ">
                    {{ session('status') }}
            </div>
         @endif
            <div class="form-label-group pb-3">
            <input type="text" id="first_name" name="first_name"
            class="form-control @error('first_name') border-red-500 @enderror" value="{{ old('first_name')}}"
             placeholder="First Name" required autofocus>
             @error('first_name')
               <div class="text-red-500 mt-2 text-sm ">
                 {{ $message }}
               </div>
            @enderror
         </div>
         <div class="form-label-group pb-3">
            <input type="text" id="last_name" name="last_name" class="form-control @error('last_name') border-red-500 @enderror" value="{{ old('last_name')}}"
            placeholder="Last Name" required autofocus>
            @error('last_name')
         <div class="text-red-500 mt-2 text-sm ">
              {{ $message }}
        </div>
        @enderror
         </div>
      <div class="form-label-group pb-3">
        <input type="email"
        class="form-control @error('email') border-red-500 @enderror" value="{{ old('email')}}"  name="email" placeholder="Email address" required autofocus>
        @error('email')
         <div class="text-red-500 mt-2 text-sm ">
                {{ $message }}
           </div>
         @enderror
    </div>

      <div class="form-label-group pb-3">
        <input type="password" name="password"
        class="form-control @error('password') border-red-500 @enderror" value="{{ old('password')}}" placeholder="Password" required>
        @error('password')
         <div class="text-red-500 mt-2 text-sm ">
           {{ $message }}
          </div>
         @enderror
    </div>
      <div class="form-label-group pb-3">
        <input type="password"  name="password_confirmation"
        class="form-control @error('password_confirmation') border-red-500 @enderror" value="{{ old('password_confirmation')}}" placeholder=" Confirm Password" required>
        @error('password_confirmation')
         <div class="text-red-500 mt-2 text-sm ">
              {{ $message }}
        </div>
         @enderror
      </div>

      <div class="form-label-group pb-3">
        <input type="text" id="phone_number" name="phone_number"
         class="form-control @error('phone_number') border-red-500 @enderror" value="{{ old('phone_number')}}" placeholder="Phone Number" placeholder="Phone Number" required>
            @error('phone_number')
         <div class="text-red-500 mt-2 text-sm ">
              {{ $message }}
        </div>
         @enderror
        </div>
      <div class="form-label-group pb-3">
                <label class="control-label">State of Origin</label>
                <select
                  onchange="toggleLGA(this);"
                  name="state"
                  id="state"
                  class="form-control @error('state') border-red-500 @enderror" value="{{ old('state')}}"
                >
                  <option value="" selected="selected">- Select -</option>
                  <option value="Abia">Abia</option>
                  <option value="Adamawa">Adamawa</option>
                  <option value="AkwaIbom">AkwaIbom</option>
                  <option value="Anambra">Anambra</option>
                  <option value="Bauchi">Bauchi</option>
                  <option value="Bayelsa">Bayelsa</option>
                  <option value="Benue">Benue</option>
                  <option value="Borno">Borno</option>
                  <option value="Cross River">Cross River</option>
                  <option value="Delta">Delta</option>
                  <option value="Ebonyi">Ebonyi</option>
                  <option value="Edo">Edo</option>
                  <option value="Ekiti">Ekiti</option>
                  <option value="Enugu">Enugu</option>
                  <option value="FCT">FCT</option>
                  <option value="Gombe">Gombe</option>
                  <option value="Imo">Imo</option>
                  <option value="Jigawa">Jigawa</option>
                  <option value="Kaduna">Kaduna</option>
                  <option value="Kano">Kano</option>
                  <option value="Katsina">Katsina</option>
                  <option value="Kebbi">Kebbi</option>
                  <option value="Kogi">Kogi</option>
                  <option value="Kwara">Kwara</option>
                  <option value="Lagos">Lagos</option>
                  <option value="Nasarawa">Nasarawa</option>
                  <option value="Niger">Niger</option>
                  <option value="Ogun">Ogun</option>
                  <option value="Ondo">Ondo</option>
                  <option value="Osun">Osun</option>
                  <option value="Oyo">Oyo</option>
                  <option value="Plateau">Plateau</option>
                  <option value="Rivers">Rivers</option>
                  <option value="Sokoto">Sokoto</option>
                  <option value="Taraba">Taraba</option>
                  <option value="Yobe">Yobe</option>
                  <option value="Zamfara">Zamafara</option>
                </select>
                 @error('state')
         <div class="text-red-500 mt-2 text-sm ">
              {{ $message }}
        </div>
         @enderror
              </div>
              <div class="form-label-group pb-3">
                <label class="control-label">LGA of Origin</label>
                <select
                  name="lga"
                  id="lga"
                  class="form-control select-lga"
                  required
                >
                </select>
                 @error('lga')
                <div class="text-red-500 mt-2 text-sm ">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-label-group pb-3">
                 <input type="text" id="address" class="form-control" name="address" placeholder="Address" required autofocus>
                 @error('address')
                <div class="text-red-500 mt-2 text-sm ">
                    {{ $message }}
                </div>
                @enderror
                </div>
             <div class="form-label-group pb-3">
                    <label for="exampleFormControlFile1">Profile Image</label>
                    <input type="file" class="form-control-file" name="picture" id="exampleFormControlFile1">
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register An Account</button>
            </form>
        </div>

        </div>

    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src={{URL::asset('js/lga.min.js')}} ></script>
@endsection
