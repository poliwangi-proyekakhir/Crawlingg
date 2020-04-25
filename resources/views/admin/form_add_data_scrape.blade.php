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
                            <h2>Form Tambah Data Scrape</h2>
                        <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">
                        <div class="form-example-int form-horizental">
                            <form action="/admin/proses_simpan_data_scrape" method="post">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Nama Data</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            {{ csrf_field() }}
                                            <input type="text" name="data_scrape" class="form-control input-sm" value="{{ old('data_scrape') }}" placeholder="Enter Name Data">
                                            <font color="red">{{ $errors->first('data_scrape') }}</font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Link</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" name="link" class="form-control input-sm" value="{{ old('link') }}" placeholder="Enter Link">
                                            <font color="red">{{ $errors->first('link') }}</font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="form-example-int mg-t-15">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <button class="btn btn-success notika-btn-success">Submit</button>
                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection