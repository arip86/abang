<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SiteController extends Controller
{
    public function home(){
    	return view ('sites.home');
    }
    public function about(){
    	return view('sites.about');
    }
        public function register(){
    	return view('sites.register');
    }
    public function postregister(Request $request) {
    	
        $user = new \App\User;
         $user->role = 'siswa';
    	$user->name = $request->nama_depan;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->save();

    	$request->request->add(['user_id' => $user->id]);
    	$pegawai = \App\Siswa::create($request->all());
    	return redirect('/')->with('sukses', 'data pendaftaran berhasil');
    }
}
