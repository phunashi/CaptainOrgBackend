


@extends('layouts.loginlayout')

@section('content')

        <div class="card card-register mx-auto mt-5">
          <div class="card-header">Register an Account</div>
          <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                        @csrf
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-label-group">
                            <input id="firstName" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required="required" autofocus="autofocus">

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                      <label for="firstName">Username</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-label-group">
                            <input id="firstName" type="number" class="form-control{{ $errors->has('phone_no') ? ' is-invalid' : '' }}" name="phone_no" value="{{ old('phone_no') }}" required="required" autofocus="autofocus">

                            @if ($errors->has('phone_no'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone_no') }}</strong>
                                </span>
                            @endif
                      <label for="firstName">Phone No</label>
                    </div>
                  </div>
                  <input type="hidden" name="user_type_id" value="4"/>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                        <input id="inputEmail" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required="required">

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                  <label for="inputEmail">Email address</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-label-group">
                            <input id="inputPassword" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required="required">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                      <label for="inputPassword">Password</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-label-group">
                            <input id="confirmPassword" type="password" class="form-control" name="password_confirmation" required="required">

                      <label for="confirmPassword">Confirm password</label>
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Register') }}
                </button>
            </form>
            <div class="text-center">
              <a class="d-block small mt-3" href="{{ route('login') }}">Login Page</a>
              <a class="d-block small" href="{{ route('password.request') }}">Forgot Password?</a>
            </div>
          </div>
        </div>
 
@endsection
