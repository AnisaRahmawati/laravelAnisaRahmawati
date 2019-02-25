<<<<<<< HEAD

@extends('auth.main')
@section('title','Login')
@section('content')
<div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form method="POST" action="{{route('login')}}">
           {{csrf_field()}} 
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}"
                name="email" 
                placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
                @if($errors->has('email'))
                <div class"invalid-feedback">{{$errors->first('email')}}</div>
                @endif
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" 
                class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}"
                name="password" 
                placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
                @if($errors->has('password'))
                <div class"invalid-feedback">{{$errors->first('password')}}</div>
                @endif
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember" {} old ('remember') ? 'checked':''}}>
                  Remember Password
                </label>
              </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Login</button>
          </form>
          <div class="text-center">
         <a class="d-block small" href="{{route('password.request')}}">Forgot Password?</a>
          </div>
        </div>
=======
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="col-md-4 control-label">Password</label>

        <div class="col-md-6">
             <input id="password" type="password" class="form-control" name="password" required>

                 @if ($errors->has('password'))
             <span class="help-block">
          <strong>{{ $errors->first('password') }}</strong>
          </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
>>>>>>> vidio eps 10
</div>
@endsection

