<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Auth;
use Hash;
use Session;

class AdminController extends Controller
{
    public function index()
    {
        
        return view('login_admin');

    }

    public function dashboard()
    {
        if(Session::has('username')){
        $a = Session::get('username');
        Session::put('login', 'Selamat Datang');
        Session::put('username', $a);

        $link = 'active';
        return view('dashboard_admin', ['link' => $link]);

    }else{

        return redirect('/admin');
        
        }
    }

    public function simpan_user(Request $request){
        
        DB::table('pengguna')->insert([
        'username' => $request->username,  
        'password' => $request->password,
        'level'    => '2'
        ]);
        return redirect('/admin');
    }

    public function cek_login(Request $request)
    {

    	$this->validate($request, 
    		['username' => 'required'],
    		['password' => 'required']);

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
    		return redirect('/admin/dashboard');
    	}

    	if($user!='0' && $usera->level == '2'){
    		Session::put('login', 'Selamat Datang level 2');
    		Session::put('username', $usera->username);
    		return redirect('/beranda');
    	}
        
    }

    public function logout()
    {
    	Session::forget('username');
    	Session::forget('login');
    	Session::forget('gagal_login');
        return redirect('/admin');
        
    }
}
