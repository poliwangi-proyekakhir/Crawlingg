@extends('layouts.notika');


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

                        <li><a href="/admin/data_scrape"><i class="notika-icon notika-windows"></i> Data Scrape</a>
                        </li>
                        
                    </ul>
                    
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Main Menu area End-->



<!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2><a href="/user/tambah_user" class="btn btn-primary">Add Pengguna</a></h2>
                            
                            @if($msg = Session::get('alert_tambah'))
                            <h4><div class="alert alert-success" id="success-alert">{{ $msg }}</h4></div>
                            @endif

                            @if($msg = Session::get('alert_hapus'))
                            <h4><div class="alert alert-success" id="success-alert">{{ $msg }}</h4></div>
                            @endif

                            @if($msg = Session::get('alert_update'))
                            <h4><div class="alert alert-success" id="success-alert">{{ $msg }}</h4></div>
                            @endif

                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($user as $u)
                                    <tr>
                                        <td>{{ $u->username }}</td>
                                        <td>{{ $u->email }}</td>
                                        <td><a href="/user/edit/{{ $u->id_pengguna }}">Ubah</a>
                                        	||
                                        	<a onclick="return confirm('Yakin menghapus data ini?')" href="/user/hapus_user/{{ $u->id_pengguna }}">Hapus</a>
                                        	</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection