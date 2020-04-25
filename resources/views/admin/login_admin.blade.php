@extends('layouts.notika_login')

@section('content')
<div class="login-content">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
           
            <div class="nk-form">

                   @if($msg = Session::get('alert_tambah'))
                <div class="alert alert-success" id="success-alert">{{ $msg }}</div>
                    @endif

                <center>
                    <h3>Form Login</h3></center>
                <form action="/admin/cek_login" method="post">
                <div class="input-group">
                    
                    <span class="input-group-addon nk-ic-st-pro"></span>
                    <div class="nk-int-st">
                    {{ csrf_field() }}
                        <input type="text" name="username" required="Harus Diisi" class="form-control" placeholder="Username">
                    </div>
                </div>
                <div class="input-group mg-t-25">
                    
                    <span class="input-group-addon nk-ic-st-pro"></span>
                    <div class="nk-int-st">
                        <input type="password" name="password" required="Harus Diisi" class="form-control" placeholder="Password">
                    </div>
                </div>
               
                <button type="submit" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></button>
            </div>
        </form>

            <div class="nk-navigation nk-lg-ic">
                <a href="/admin/register_user" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Register</span></a>
                <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
            </div>
        </div>


@endsection