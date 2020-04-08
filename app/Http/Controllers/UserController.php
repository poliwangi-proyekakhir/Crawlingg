<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function home(){
    	//$user = DB::table('pengguna')->paginate(5);
        $link = 'active';
        $user = DB::table('pengguna')->get();

    	return view('data_user',['user' => $user, 'link' => $link]);
    }

    public function tambah_user(){
    
    	return view('form_tambah_user');
    }


    public function edit($id_pengguna){
    	
        $user = DB::table('pengguna')->where('id_pengguna', $id_pengguna)->get();
        $link = 'active';

    	return view('form_edit_user',['user' => $user, 'link' => $link]);
    }

    public function proses_simpan(Request $request){
    	
    	DB::table('user')->insert([
    	'username' => $request->username,  
    	'password' => $request->password,
    	'level'    => $request->level
    	]);
    	return redirect('/user');
    }

    public function update_proses(Request $request){
    	
    	DB::table('pengguna')->where('id_pengguna', $request->id_pengguna)->update([
    	'username' => $request->username,  
    	'password' => $request->password
    	]);
    	return redirect('/user');
    }

    public function hapus_user($id_pengguna){
    	
    	DB::table('pengguna')->where('id_pengguna', $id_pengguna)->delete();
    	return redirect('/user');
    }
}
