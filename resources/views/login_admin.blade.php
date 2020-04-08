@extends('layouts.notika_login')

@section('content')
<div class="login-content">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
            <div class="nk-form">
                <center><h3>Form Login</h3></center>
                <form action="/admin/cek_login" method="post">
                <div class="input-group">
                    
                    <div class="nk-int-st">
                    {{ csrf_field() }}
                        <input type="text" name="username" required="Harus Diisi" class="form-control" placeholder="Username">
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    
                    <div class="nk-int-st">
                        <input type="password" name="password" required="Harus Diisi" class="form-control" placeholder="Password">
                    </div>
                </div>
               
                <button type="submit" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></button>
            </div>
        </form>

            <div class="nk-navigation nk-lg-ic">
                <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Register</span></a>
                <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
            </div>
        </div>

        <!-- Register -->
        <div class="nk-block" id="l-register">
            <div class="nk-form">
                 <center><h3>Form Register</h3></center>
                <div class="input-group">
                    <form action="/admin/simpan_user" method="post">
                    
                    <div class="nk-int-st">
                        {{ csrf_field() }}
                        <input type="text" name="username" required class="form-control" placeholder="Username">
                    </div>
                </div>

                <div class="input-group mg-t-15">
                   
                    <div class="nk-int-st">
                        <input type="text" name="password" required class="form-control" placeholder="Password">
                    </div>
                </div>

                 <button type="submit" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></button>
            </div>
        </form>

            <div class="nk-navigation rg-ic-stl">
                <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Sign in</span></a>
                <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
            </div>
        </div>


@endsection