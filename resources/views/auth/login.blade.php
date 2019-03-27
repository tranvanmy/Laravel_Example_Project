@extends('layouts.app')

@section('content')
<div class="login-box">
        <div class="login-logo">
            <b>Training</b> Project
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="row">
                    <div class="col-xs-8">
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
            </form>
            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                Facebook</a>
                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                Google+</a>
            </div>
            <a href="#">I forgot my password</a><br>
            <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
        </div>
    </div>
@endsection
