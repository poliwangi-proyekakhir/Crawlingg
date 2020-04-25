@extends('layouts.notika')

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


 <!-- Form Examples area start-->
    <div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>Ubah Data Scrape</h2>
                           
                        </div>
                        <form action="/admin/update_proses_data_scrape/{{ $scrape->id_data_scrape }}" method="POST">
                        <div class="form-example-int">
                            <div class="form-group">
                              
                                <label>Nama Data</label>
                                <div class="nk-int-st">
                                	
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}

                                    <input type="hidden" name="id_data_scrape" value="{{ $scrape->id_data_scrape }}" class="form-control input-sm">
                                	<input type="text" name="data_scrape" value="{{ $scrape->data_scrape }}" class="form-control input-sm">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Link</label>
                                <div class="nk-int-st">
                                    <input type="text" name="link" value="{{ $scrape->link }}" class="form-control input-sm">
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