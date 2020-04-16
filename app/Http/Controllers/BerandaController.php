<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Hash;
use App\Pengguna;

class BerandaController extends Controller
{
    public function index()
    {
        if(Session::has('level')==2){
        $a = Session::get('username');
        Session::put('login', 'Selamat Datang');
        Session::put('username', $a);
        return view('home');

    }else{
        Session::put('username', '');
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
            Session::flash('alert_gagallogin', 'Gagal login');
            return redirect('/beranda/login');
        }

        if($user!='0' && $usera->level == '2'){
            Session::put('login', 'Selamat Datang');
            Session::put('username', $usera->username);
            Session::put('level', $usera->level);
            return redirect('/beranda');
        }

        if($user!='0' && $usera->level == '1'){
            Session::put('login', 'Selamat Datang level 2');
            Session::put('username', $usera->username);
            Session::put('level', $usera->level);
            return redirect('/admin/dashboard');
        }
        
    }

    public function proses_simpan(Request $request){
    
        
        
        Session::flash('alert_tambah', 'Data Sukses Ditambahkan');

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

        return redirect('/beranda/register');
        

    }

    public function login()
    {
        return view('form_login');
    }

     public function register()
    {
        return view('form_register_home');
    }

    public function logout()
    {
        Session::forget('username');
        Session::forget('login');
        Session::forget('level');
        Session::forget('gagal_login');
        return redirect('/beranda');
        
    }

}
