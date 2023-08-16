@extends('layouts.app')

@section('content')
<style>

.loginbtn {
  background-color: #0040ff;
  color: white;
  border-radius: 50px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 73%;
  opacity: 0.9;
height: 40px;
  
}
.loginbtn:hover {
  opacity: 1;
}

body{
margin-top: 110px;
  position: relative;
  width: 100%;
  font-family: "Times New Roman", Times, serif;
  background-image: url(/img/kaitlyn-baker-vZJdYl5JVXY-unsplash.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  }
  .card{
      background-color: rgba(124, 125, 125, 0.543);

  }
  label{
     color: aquamarine;
  }
  .show_pass{
    color: aquamarine !important;
    
  }
  .card-header{
    color: aquamarine;
    text-align: center;
    font-size: 40px;
  }

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" value="" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              
                                
                                <script>
                                function myFunction() { 
                                  var x = document.getElementById("password");
                                  if (x.type === "password") {
                                    x.type = "text";
                                  } else {
                                    x.type = "password";
                                  }
                                }
                                </script>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                
                                <div class="form-check">
                                    <p class="show_pass"> <input class="form-check-input" type="checkbox" onclick="myFunction()">&nbsp;Show Password</p>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button  class="loginbtn" type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br>
@endsection
