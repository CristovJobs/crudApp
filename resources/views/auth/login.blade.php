@extends('dashboard.layouts.mastepage')

@section('main')
<div id="auth">

        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="{{ asset("dashboard/images/login.png") }}" height="48" class="mb-4">
                        <h3>Sign In</h3>
                        <p>Please sign in to continue to {{config('app.name')}}.</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                       @csrf
                        <div class="form-group position-relative">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <div class="position-relative">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group position-relative">
                            <div class="clearfix">
                                <label for="password">{{ __('Password') }}</label>
                                <a href="auth-forgot-password.html" class="float-right">
                                    <small>
                                      @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="float-right">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                    </small>
                                </a>
                            </div>
                            <div class="position-relative">
                                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-check clearfix my-4">
                            <div class="checkbox float-left">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">{{ __('Remember Me') }}</label>
                            </div>
                            <div class="float-right">
                               <a href="{{ route('register') }}">Don't have an account?</a>
                               
                            </div>
                        </div>
                        <div class="clearfix s">
                        
                             <button class="btn btn-primary float-right ml-1" type="submit">{{ __('Login') }}</button>
                        </div>
                    </form>
                  
                  
                </div>
            </div>
        </div>
    </div>
</div>
 </div>

@endsection
