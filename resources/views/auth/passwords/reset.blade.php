@extends('layouts.loginlayout')

@section('content')
<div class="card card-register mx-auto mt-5">
        <div class="card-header">Reset Password</div>
        <div class="card-body">
              <form method="POST" action="{{ route('password.update') }}">
                      @csrf
                      <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group">
              <div class="form-label-group">
                    <input id="inputEmail" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required="required" autofocus="autofocus">

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
                  {{ __('Reset Password') }}
              </button>
          </form>
    
        </div>
      </div>
@endsection
