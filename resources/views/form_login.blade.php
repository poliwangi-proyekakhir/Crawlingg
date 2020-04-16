 @extends('layouts.home')

 @section('content')





 <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Login</h2>
                         
                         @if($msg = Session::get('alert_gagallogin'))
                            <div class="alert alert-danger" id="success-alert"><h4>{{ $msg }}</h4></div>
                            @endif

                        <form action="/beranda/cek_login" method="post">
                            <div class="group-input">
                            	{{ csrf_field() }}
                                <label for="username">Username *</label>
                                <input type="text" required name="username" id="username">
                            
                            </div>
                            <div class="group-input">
                                <label for="pass">Password *</label>
                                <input type="password" required name="password" id="pass">
                            </div>
                          
                            <button type="submit" class="site-btn login-btn">Sign In</button>
                        </form>
                        <div class="switch-login">
                            <a href="/beranda/register" class="or-login">Or Create An Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->

@endsection('content')
