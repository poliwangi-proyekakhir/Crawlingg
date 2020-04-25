<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Pengguna;
use Session;

class UserController extends Controller
{
    public function home(){
    	//$user = DB::table('pengguna')->paginate(5);
        if(Session::has('level')==1){
        $a = Session::get('username');
        Session::put('login', 'Selamat Datang');
        Session::put('username', $a);
        

        $link = 'active';
        $user = Pengguna::all();

        return view('admin/data_user',['user' => $user, 'link' => $link]);

    }

        if(Session::has('level')!=1){
        return redirect('/admin');
        
        }
    }

    public function tambah_user(){
    
        if(Session::has('level')==1){
        $a = Session::get('username');
        Session::put('login', 'Selamat Datang');
        Session::put('username', $a);



        $link = 'active';
    	return view('admin/form_tambah_user', ['link' => $link]);
    }

    if(Session::has('level')!=1){
        return redirect('/admin');
        
        }

    }


    public function edit($id_pengguna){

        if(Session::has('level')==1){
        $a = Session::get('username');
        Session::put('login', 'Selamat Datang');
        Session::put('username', $a);

    	
        $user = Pengguna::find($id_pengguna);
        $link = 'active';

    	return view('admin/form_edit_user',['user' => $user, 'link' => $link]);
    }

    if(Session::has('level')!=1){
        return redirect('/admin');
        
        }
    }

    public function proses_simpan(Request $request){
    
        if(Session::has('level')==1){
        $a = Session::get('username');
        Session::put('login', 'Selamat Datang');
        Session::put('username', $a);
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

    	return redirect('/user');
        }

        if(Session::has('level')!=1){
        return redirect('/admin');
        
        }

    }

    public function update_proses($id_pengguna, Request $request){
    	
        if(Session::has('level')==1){
        $a = Session::get('username');
        Session::put('login', 'Selamat Datang');
        Session::put('username', $a);
        Session::flash('alert_update', 'Data Sukses Diubah');

        $user = Pengguna::find($id_pengguna);
        $user->username = $request->username;
        $user->level = $request->level;
        $user->email = $request->email;
        $user->save();
    	
    	return redirect('/user');

        }

        if(Session::has('level')!=1){
        return redirect('/admin');
        
        }
    }

    public function hapus_user($id_pengguna){
    
        if(Session::has('level')==1){
        $a = Session::get('username');
        Session::put('login', 'Selamat Datang');
        Session::put('username', $a);
        Session::flash('alert_hapus', 'Data Sukses Dihapus');
       
        	
    	$user = Pengguna::find($id_pengguna);
        $user->delete();

    	return redirect('/user');

        }

        if(Session::has('level')!=1){
        return redirect('/admin');
        
        }
    }
}
