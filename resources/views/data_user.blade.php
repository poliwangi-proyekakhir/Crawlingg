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
                            <h2>Basic Example</h2>
                            <p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($user as $u)
                                    <tr>
                                        <td>{{ $u->username }}</td>
                                        <td>{{ $u->level }}</td>
                                        <td><a href="/user/edit/{{ $u->id_pengguna }}">Ubah</a>
                                        	||
                                        	<a onclick="return confirm('Yakin menghapus data ini?')" href="/user/hapus/{{ $u->id_pengguna }}">Hapus</a>
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