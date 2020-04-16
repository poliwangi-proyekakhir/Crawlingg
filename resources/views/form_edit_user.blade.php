@extends('layouts.notika')

@section('content')


<div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li><a href="/admin/dashboard"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
    
                        <li class="{{ $link }}"><a href="/user"><i class="notika-icon notika-windows"></i> User</a>
                        </li>
                        
                    </ul>
                    
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->


 <!-- Form Examples area start-->
    <div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Basic Example</h2>
                           
                        </div>
                        <form action="/user/update_proses/{{ $user->id_pengguna }}" method="POST">
                        <div class="form-example-int">
                            <div class="form-group">
                              
                                <label>Username</label>
                                <div class="nk-int-st">
                                	
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}

                                    <input type="hidden" name="id_pengguna" value="{{ $user->id_pengguna }}" class="form-control input-sm">
                                    <input type="hidden" name="level" value="{{ $user->level }}" class="form-control input-sm">
                                	<input type="text" name="username" value="{{ $user->username }}" class="form-control input-sm">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Email</label>
                                <div class="nk-int-st">
                                    <input type="text" name="email" value="{{ $user->email }}" class="form-control input-sm">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <button type="submit" class="btn btn-success notika-btn-success">Ubah Data</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
           
            
        </div>
    </div>
    <!-- Form Examples area End-->


    <br><br><br><br><br><br>

@endsection