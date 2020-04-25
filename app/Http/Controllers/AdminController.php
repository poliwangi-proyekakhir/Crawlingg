<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Auth;
use Hash;
use Session;
use App\DataScrape;
use App\Pengguna;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin/login_admin');

    }

    public function login_new_user()
    {
        Session::flash('alert_tambah', 'Akun Sukses Ditambahkan. Silahkan Login');
        return view('admin/login_admin');

    }

    public function register_user()
    {
        
        return view('admin/form_register_user_via_login');

    }

    public function dashboard()
    {
        if(Session::has('username')){
        $a = Session::get('username');
        Session::put('login', 'Selamat Datang');
        Session::put('username', $a);

        $link = 'active';
        return view('admin/dashboard_admin', ['link' => $link]);

    }else{

        return redirect('/admin');
        
        }
    }

    public function add_data_scrape(){
    
        if(Session::has('level')==1){
        $a = Session::get('username');
        Session::put('login', 'Selamat Datang');
        Session::put('username', $a);



        $link = 'active';
        return view('admin/form_add_data_scrape', ['link' => $link]);
        }
    }

    public function proses_simpan_data_scrape(Request $request){
    
        if(Session::has('level')==1){
        $a = Session::get('username');
        Session::put('login', 'Selamat Datang');
        Session::put('username', $a);
        Session::flash('alert_tambah', 'Data Sukses Ditambahkan');

        $msg = [
            'required' => ':attribute harus diisi'];
            

        $this->validate($request, 
            ['data_scrape' => 'required',
            'link' => 'required'], $msg);

           DataScrape::create([
            'data_scrape' => request('data_scrape'),  
            'link' => request('link'),
           ]);

        return redirect('/admin/data_scrape');
        }

        if(Session::has('level')!=1){
        return redirect('/admin');
        
        }

    }

    public function edit_scrape($id_data_scrape){

        if(Session::has('level')==1){
        $a = Session::get('username');
        Session::put('login', 'Selamat Datang');
        Session::put('username', $a);

        
        $scrape = DataScrape::find($id_data_scrape);
        $link = 'active';

        return view('admin/form_edit_data_scrape',['scrape' => $scrape, 'link' => $link]);
        }
    }

    public function simpan_user(Request $request){
        
        
        Session::put('login', 'Selamat Datang');
        //Session::put('username', $a);
        

        $msg = [
            'required' => ':attribute harus diisi',
            'min' => ':attribute minimal :min karakter',
            'max' => ':attribute maksimal :max karakter',
            'email' => 'format :attribute email tidak benar'];

        $this->validate($request, 
            ['username' => 'required|min:4|max:20',
            'password' => 'required|min:4|max:20',
            'email' => 'required|email'], $msg);

           Pengguna::create([
            'username' => request('username'),  
            'password' => request('password'),
            'email'    => request('email'),
            'level'    => '2',
           ]);

        return redirect('/admin/login_new_user');
        
    }

    public function update_proses_data_scrape($id_data_scrape, Request $request){
        
        if(Session::has('level')==1){
        $a = Session::get('username');
        Session::put('login', 'Selamat Datang');
        Session::put('username', $a);
        Session::flash('alert_update', 'Data Sukses Diubah');

        $scrape = DataScrape::find($id_data_scrape);
        $scrape->data_scrape = $request->data_scrape;
        $scrape->link = $request->link;
        $scrape->save();
        
        return redirect('/admin/data_scrape');

        }

        if(Session::has('level')!=1){
        return redirect('/admin');
        
        }
    }

    public function cek_login(Request $request)
    {

    	$this->validate($request, 
    		['username' => 'required',
    		'password' => 'required']);

    	$username = $request->input('username');
    	$pwd = $request->input('password');
    	//$hashed = Hash::make($pwd);

    	$user = DB::table('pengguna')->where(['username' => $username, 'password' => $pwd])->count();
    	$usera = DB::table('pengguna')->where(['username' => $username, 'password' => $pwd])->first();
    	
    	
    	
    	if($user=='0'){
    		Session::put('gagal_login', 'Gagal Login');
    		return redirect('/admin');
    	}

    	if($user!='0' && $usera->level == '1'){
    		Session::put('login', 'Selamat Datang');
    		Session::put('username', $usera->username);
            Session::put('level', $usera->level);
    		return redirect('/admin/dashboard');
    	}

    	if($user!='0' && $usera->level == '2'){
    		Session::put('login', 'Selamat Datang level 2');
    		Session::put('username', $usera->username);
            Session::put('level', $usera->level);
    		return redirect('/beranda');
    	}
        
    }

    public function data_scrape(){
        //$user = DB::table('pengguna')->paginate(5);
        if(Session::has('level')==1){
        $a = Session::get('username');
        Session::put('login', 'Selamat Datang');
        Session::put('username', $a);
        

        $link = 'active';
        $scrape = DataScrape::all();

        return view('admin/data_scrape',['link' => $link, 'scrape' => $scrape]);

    }

        if(Session::has('level')!=1){
        return redirect('/admin');
        
        }
    }

    public function hapus_scrape($id_data_scrape){
    
        if(Session::has('level')==1){
        $a = Session::get('username');
        Session::put('login', 'Selamat Datang');
        Session::put('username', $a);
        Session::flash('alert_hapus', 'Data Sukses Dihapus');
       
            
        $scrape = DataScrape::find($id_data_scrape);
        $scrape->delete();

        return redirect('/admin/data_scrape');

        }

        if(Session::has('level')!=1){
        return redirect('/admin');
        
        }
    }

    public function logout()
    {
    	Session::forget('username');
    	Session::forget('login');
    	Session::forget('gagal_login');
        Session::forget('level');
         //Session::forget('alert_hapus');
        return redirect('/admin');
        
    }
}
