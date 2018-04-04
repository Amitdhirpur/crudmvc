@extends('layouts.frontend.app')

@section('content')
<div class="container" style="padding-top: 23px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="margin-left:120px;margin-top:60px">
            <div class="panel panel-default" style="border:0px;text-align:center">
                <div class="panel-heading" style="background-color:#f5f8fa;border:0px"><h4 style="margin-left:100px">Register Form</h4></div>

                <div class="panel-body" style="background-color:#f5f8fa;border:0px">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Username" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="E-Mail Address" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
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
                            <label for="password-confirm" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                               <button type="submit"  class="btn btn-sm btn-primary btn-block">
                                    Register
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                        <a href="{{ route('login') }}" type="button"  style="width:73%" class="btn btn-sm btn-primary btn-block">
                                Login
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
