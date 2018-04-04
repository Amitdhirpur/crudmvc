@extends('loginlayout.app')
@section('content')
<form class="m-t" role="form" method="post" action="dashboard">
    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Username" required="">
    </div>
    <div class="form-group">
        <input type="password" name="passwsord" class="form-control" placeholder="Password" required="">
    </div>
    <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

    <a href="#"><small>Forgot password?</small></a>
    <p class="text-muted text-center"><small>Do not have an account?</small></p>
    <a class="btn btn-sm btn-white btn-block" href="register">Create an account</a>
</form>
@endsection('content')
