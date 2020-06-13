<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Hash;
use App\Pengguna;

use App\Mail\CrawlinggEmail;
use Illuminate\Support\Facades\Mail;

class BerandaController extends Controller
{
    public function index()
    {
        if(Session::has('level')==2){
        $a = Session::get('username');
        Session::put('login', 'Selamat Datang');
        Session::put('username', $a);
        return view('home/home');

    }else{
        Session::put('username', '');
        return view('home/home');
    }
    }


    public function kirimemail(){

        Mail::to("hezinack@gmail.com")->send(new CrawlinggEmail());

        return "Email telah dikirim";

    }

    public function cek_login(Request $request)
    {

        Session::flash('alert_tambah', 'Data Sukses Ditambahkan');
       
        $this->validate($request, 
            ['username' => 'required'],
            ['password' => 'required']);

        $username = $request->input('username');
        $pwd = $request->input('password');
        $akti = '1';
        //$hashed = Hash::make($pwd);

        $user = DB::table('pengguna')->where(['username' => $username, 'password' => $pwd])->count();
        $usera = DB::table('pengguna')->where(['username' => $username, 'password' => $pwd])->first();
        
        
        
        if($user=='0'){
            Session::put('gagal_login', 'Gagal Login Mohon Periksa Kembali Username dan Password');
            Session::flash('alert_gagallogin', 'Gagal login Mohon Periksa Kembali Username dan Password');
            return redirect('/beranda/login');
        }

        if($user!='0' && $usera->level == '2' && $usera->aktif == '1'){
            Session::put('login', 'Selamat Datang');
            Session::put('username', $usera->username);
            Session::put('level', $usera->level);
            return redirect('/beranda');
        }

        if($user!='0' && $usera->level == '2' && $usera->aktif == '0'){
            Session::put('gagal_login', 'Aktifkan Akun Anda');
            Session::flash('alert_gagallogin', 'Aktifkan Akun Anda');
            return redirect('/beranda/login');
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
            'id_pengguna' => request('id_pengguna'),  
            'username' => request('username'),  
            'password' => request('password'),
            'email'    => request('email'),
            'level'    => '2',
            'aktif'    => '0',
           ]);

           $email = $request->input('email');
           $usera = DB::table('pengguna')->first();

           try{
            Mail::send('emailku', array('pesan' => $request->username, 'email' => $request->email, 'id_pengguna' => $request->id_pengguna), function($pesan) use($request){
                $pesan->to($request->email,'Verifikasi')->subject('Verifikasi Email');
                $pesan->from('hezinack@gmail.com');
            });
        }catch (Exception $e){
            return response(['status' => false,'errors' => $e->getMessage()]);
        }
        
        
           // Mail::to($email)->send(new CrawlinggEmail($email));

       
        return redirect('/beranda/register');
        

    }

    public function verifemail($id_pengguna){
        
       
        Session::flash('alert_tambah', 'Akun Sudah Aktif. Terimakasih.');

        $user = Pengguna::find($id_pengguna);
        $user->aktif = "1";
        $user->save();
        
        return redirect('/beranda/register');
    }

    public function login()
    {
        return view('home/form_login');
    }

     public function register()
    {
        $usera = Pengguna::max('id_pengguna');
        $iduser = $usera + 1;
        return view('home/form_register_home', ['user' => $iduser]);
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
