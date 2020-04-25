@extends('layouts.notika_login')

@section('content')
<div class="login-content">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
            <div class="nk-form">
                <center>


                    <h3>Form Register</h3></center>
        

                    <form action="/admin/simpan_user" method="post">
                     <div class="input-group">

                    <span class="input-group-addon nk-ic-st-pro"></span>    
                    <div class="nk-int-st">
                        {{ csrf_field() }}
                        <input type="text" name="username" value="{{ old('username') }}" class="form-control" placeholder="Username">
                        <font color="red">{{ $errors->first('username') }}</font>
                    </div>
                </div>

                <div class="input-group mg-t-15">
                   
                   <span class="input-group-addon nk-ic-st-pro"></span>
                    <div class="nk-int-st">
                        <input type="password" value="{{ old('password') }}" name="password" class="form-control" placeholder="Password">
                        <font color="red">{{ $errors->first('password') }}</font>
                    </div>
                </div>

                 <div class="input-group mg-t-15">
                   
                   <span class="input-group-addon nk-ic-st-pro"></span>
                    <div class="nk-int-st">
                        <input type="text" value="{{ old('email') }}" name="email" required class="form-control" placeholder="Email">
                        <font color="red">{{ $errors->first('email') }}</font>
                    </div>
                </div>

                 <button type="submit" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></button>
            </div>
        </form>

            <div class="nk-navigation rg-ic-stl">
                <a href="/admin" data-ma-block="#l-login"><i class="notika-icon notika-left-arrow"></i> <span>Sign in</span></a>
                <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
            </div>
        </div>

@endsection