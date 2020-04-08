<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Hash;

class BerandaController extends Controller
{
    public function index()
    {
        if(Session::has('username')){
        $a = Session::get('username');
        Session::put('login', 'Selamat Datang');
        Session::put('username', $a);
        return view('home');

    }else{
        return view('home');
    }
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
            return redirect('/beranda/form_login');
        }

        if($user!='0' && $usera->level == '2'){
            Session::put('login', 'Selamat Datang');
            Session::put('username', $usera->username);
            return redirect('/beranda');
        }

        if($user!='0' && $usera->level == '1'){
            Session::put('login', 'Selamat Datang level 2');
            Session::put('username', $usera->username);
            return redirect('/admin/dashboard');
        }
        
    }

    public function login()
    {
        return view('form_login');
    }

    public function logout()
    {
        Session::forget('username');
        Session::forget('login');
        Session::forget('gagal_login');
        return redirect('/beranda');
        
    }

}
