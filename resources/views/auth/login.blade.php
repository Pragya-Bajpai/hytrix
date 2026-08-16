@extends('app')
@section('content')
<div class="login-box">
  <div class="login-logo">
  <img src="{{asset('dist/img/logo1.png')}}" alt="company logo" class="img-fluid" width="100px" height="auto;">

    <!--a href="{{ route('login') }}"><b>Admin</b>LTE</a--->
  </div>
  <!-- /.login-logo -->
  <div class="card">
     @if(session()->has('error'))
                   <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
    <div class="card-body login-card-body">
      <p class="login-box-msg">Welcome to Hytrix Technologies llp</p>

      <form action="{{ url('custom-login') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              @error('email')
               <span class="fas fa-envelope"><strong>{{ $message }}</strong></span>
              @enderror
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              @error('password')
              <span class="fas fa-lock"><strong>{{ $message }}</strong></span>
               @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>

          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

@endsection
