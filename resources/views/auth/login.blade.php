@extends('layouts.app')

@section('content')
<div class="login-box" id="login-form">
        <div class="login-logo">
            <b>Training</b> Project
        </div>
        <div class="login-box-body">
            <p class="login-box-msg" :class="{'error-login': userNotFound}">@{{ userNotFound ? userNotFound : 'Sign in to start your session' }}</p>
            <form role="form" @submit.prevent='handleLogin'>
                <div class="form-group has-feedback" v-bind:class="{ 'has-error': formErrors && formErrors.email }">
                    <input type="email" class="form-control" v-model="user.email" id="email" placeholder="Email">
                    <span  v-if="formErrors && formErrors.email" class="help-block">@{{ formErrors.email[0] }}</span>
                </div>
                <div class="form-group has-feedback" v-bind:class="{ 'has-error': formErrors && formErrors.password }">
                    <input type="password" class="form-control" v-model="user.password" placeholder="Password">
                    <span  v-if="formErrors && formErrors.password" class="help-block">@{{ formErrors.password[0] }}</span>
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
@section('script')
<script src="{{ asset('/js/sites/auth/login.js') }}"></script>
@endsection

<style>
    .error-login {
        font-size: 20px;
        color:red;
    }
</style>
