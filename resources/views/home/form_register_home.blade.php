 @extends('layouts.home')

 @section('content')





 <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Register User</h2>
                        
                         @if($msg = Session::get('alert_tambah'))
                            <div class="alert alert-success" id="success-alert"><h4>{{ $msg }}</h4></div>
                            @endif

                        <form action="/beranda/proses_simpan" method="post">
                            <div class="group-input">
                            	{{ csrf_field() }}
                                <label for="username">Username *</label>
                                <input type="text" value="{{ old('username') }}" required name="username" id="username">
                            <font color="red">{{ $errors->first('username') }}</font>
                            </div>
                            <div class="group-input">
                                <label for="username">Email *</label>
                                <input type="text" value="{{ old('email') }}" required name="email" id="email">
                            <font color="red">{{ $errors->first('email') }}</font>
                            </div>
                            <div class="group-input">
                                <label for="pass">Password *</label>
                                <input type="password" value="{{ old('password') }}" required name="password" id="pass">
                                <font color="red">{{ $errors->first('password') }}</font>
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
