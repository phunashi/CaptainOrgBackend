@extends('layouts.loginlayout')
@section('content')
        <div class="card card-login mx-auto mt-5">
                <div class="card-header">Reset Password</div>
                <div class="card-body">
                  <div class="text-center mb-4">
                    <h4>Forgot your password?</h4>
                    <p>Enter your email address and we will send you instructions on how to reset your password.</p>
                  </div>
                  @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif
              <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group">
                      <div class="form-label-group">
                            <input id="inputEmail" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required="required" autofocus="autofocus">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        <label for="inputEmail">Enter email address</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Send Password Reset Link') }}
                        </button>
                  </form>
                  <div class="text-center">
                    <a class="d-block small mt-3" href="{{ route('register') }}">Register an Account</a>
                    <a class="d-block small" href="{{ route('login') }}">Login Page</a>
                  </div>
                </div>
              </div>

@endsection
