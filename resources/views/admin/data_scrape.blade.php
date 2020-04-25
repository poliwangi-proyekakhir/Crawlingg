@extends('layouts.notika');


@section('content')

 <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li><a href="/admin/dashboard"><i class="notika-icon notika-house"></i> Home</a>
                        </li>

                        <li><a href="/user"><i class="notika-icon notika-windows"></i> User</a>
                        </li>
    
                        <li class="{{ $link }}"><a href="/admin/data_scrape"><i class="notika-icon notika-windows"></i> Data Scrape</a>
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
                            <h2><a href="/admin/add_data_scrape" class="btn btn-primary">Add Scrape</a></h2>
                            
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
                                        <th>Data</th>
                                        <th>Link</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($scrape as $u)
                                    <tr>
                                        <td>{{ $u->data_scrape }}</td>
                                        <td>{{ $u->link }}</td>
                                        <td><a href="/admin/edit_scrape/{{ $u->id_data_scrape }}">Ubah</a>
                                        	||
                                        	<a onclick="return confirm('Yakin menghapus data ini?')" href="/admin/hapus_scrape/{{ $u->id_data_scrape }}">Hapus</a>
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