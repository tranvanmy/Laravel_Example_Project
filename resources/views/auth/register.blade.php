@extends('layouts.app')

@section('content')
{{-- <div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">{{ __('Register') }}</div>

<div class="card-body">
<form method="POST" action="{{ route('register') }}">
@csrf

<div class="form-group row">
<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

<div class="col-md-6">
<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

@if ($errors->has('name'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('name') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group row">
<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

<div class="col-md-6">
<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

@if ($errors->has('email'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('email') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group row">
<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

<div class="col-md-6">
<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

@if ($errors->has('password'))
<span class="invalid-feedback" role="alert">
<strong>{{ $errors->first('password') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group row">
<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

<div class="col-md-6">
<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
</div>
</div>

<div class="form-group row mb-0">
<div class="col-md-6 offset-md-4">
<button type="submit" class="btn btn-primary">
{{ __('Register') }}
</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div> --}}
<div class="register-box">
    <div class="register-logo">
        <b>Training</b> Project
    </div>

    <div class="register-box-body" id="register-form">
        <p class="login-box-msg">Register a new membership</p>
        <form>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" id="name" v-model="user.name" placeholder="Full name">
            </div>
            <div class="form-group has-feedback">
                <input type="email" class="form-control" id="email"  v-model="user.email" placeholder="Email">
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" id="password"  v-model="user.password" placeholder="Password">
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" id="password_confirm" v-model="user.password_confirm" placeholder="Retype password">
            </div>
            <div class="form-group has-feedback">
                <a @click="openModalUpload()" class="btn btn-block btn-social  btn-success btn-flat">
                    <i class="fa fa-file-image-o"></i> @{{ user.avatarName ? user.avatarName : 'Upload Avatar' }}
                </a>
            </div>
            <div class="modal fade" id="modal-default">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Upload Avatar</h4>
                  </div>
                  <div class="modal-body">
                    <div v-if="!image">
                        <input type="file" @change="onFileChange">
                    </div>
                    <div v-else>
                        <img :src="image" />
                        <button @click="removeImage">Remove image</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" @click='confirmUpload()'>Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class="row">
        <div class="col-xs-8"></div>
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
    </div>
</form>

<div class="social-auth-links text-center">
    <p>- OR -</p>
    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
    Facebook</a>
    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
    Google+</a>
</div>

<a href="{{ route('login') }}" class="text-center">I already have a membership</a>
</div>
</div>
@endsection
@section('script')
    <script src="{{ asset('/js/sites/auth/register.js') }}"></script>
@endsection

<style>
    img {
        width: 100%;
        margin: auto;
        display: block;
        margin-bottom: 10px;
    }
</style>