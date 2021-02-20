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
                        <h3>Sign Up {{ __('Register') }}</h3>
                        <p>Please sign in to continue to {{config('app.name')}}.</p>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                       @csrf
                        <div class="form-group position-relative">
                            <label for="name">{{ __('Name') }}</label>
                            <div class="position-relative">
                             <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group position-relative">
                            <div class="clearfix">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                                </a>
                            </div>
                        </div>
                          <div class="form-group position-relative">
                            <div class="clearfix">
                                <label for="email">{{ __('Password') }}</label>
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </a>
                            </div>
                        </div>
                          <div class="form-group position-relative">
                            <div class="clearfix">
                                <label for="email">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                                </a>
                            </div>
                        </div>

                        <div class="clearfix s">
                             <a class="btn btn-success float-right ml-1" href="login">Login </a>
                             <button class="btn btn-primary float-right ml-1" type="submit"> {{ __('Register') }}</button>

                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
