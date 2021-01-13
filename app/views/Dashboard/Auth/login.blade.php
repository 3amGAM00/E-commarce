@extends('Dashboard.layouts.emptyapp')
@section('content')
<div class="login-page">
    <div class="container d-flex align-items-center">
      <div class="form-holder has-shadow">
        <div class="row">

          <!-- Form Panel    -->
          <div class="col-lg-6 ">
            <div class="form d-flex align-items-center">
              <div class="content">
              <form method="post" class="form-validate" action="{{Route('auth.login')}}">
                @csrf
                  <div class="form-group">
                    <input id="login-username" type="text" name="username" required data-msg="{{__('Please enter your username')}}" class="form-control input-material @error('username') is-invalid @enderror" value="{{ old('username') }}">
                    <label for="login-username" class="label-material">{{__('User Name')}}</label>
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input id="login-password" type="password" name="password" required data-msg="{{__('Please enter your password')}}" class="form-control input-material @error('password') is-invalid @enderror">
                    <label for="login-password" class="label-material">{{__('Password')}}</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <input type="submit" id="login" class="btn btn-primary" value="{{__('Login')}}">
              </div>

            </div>

          </div>
           <!-- Logo & Information Panel-->
           <div class="col-lg-6">
            <div class="info d-flex align-items-center">
              <div class="content">
                <div class="logo">
                    <h1>Mashro3 Elt5arog☻◘♥</h1>
                    <p></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@stop
