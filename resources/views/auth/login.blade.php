@extends('layouts.frontend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top:50px;margin-left:219px">
            <div class="panel panel-default" style="border:0px">
                <div class="panel-heading" style="border:0px; text-align:center;background-color:#f5f8fa"><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login Form</h4></div>

                <div class="panel-body" style="background-color:#f5f8fa">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="email" type="text" placeholder="Username" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

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
                                <button type="submit" style="width:73%" class="btn btn-sm btn-primary btn-block">
                                    Login
                                </button>
                             </div>
                          </div>
                          <div class="form-group">
                          <div class="col-md-8 col-md-offset-4">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                          </div>
                        </div>
                          <div class="form-group">
                          <div class="col-md-8 col-md-offset-4">
                          <a href="{{ route('register') }}" type="button"  style="width:73%" class="btn btn-sm btn-primary btn-block">
                                  Register
                              </a>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
