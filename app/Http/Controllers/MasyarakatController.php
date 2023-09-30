<?php

namespace App\Http\Controllers;

use App\Models\masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function registrasi(){
        //buat objek model
        return view('Masyarakat.registrasi');
    }

    
    public function masyarakat(Request $request){
        $ol = new masyarakat();
        //Cek data yang dikirim user

        $cek= $request->validate([
            'nik'=>'required|unique:masyarakat|max:16',
            'nama'=>'required',
            'username'=>'required|min:6',
            'password'=>'required|min:4',
            'telp'=>'required|max:13'
        ]);

        $ol->create([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'username'=>$request->username,
            'password'=>$request->password,
            'telp'=>$request->telp,
        ]);

    
    //  return $ol->all();
    return back()->with('pesan','Selamat, Registrasi berhasil');
    }

    public function login(){
        return view('Masyarakat.login');
    }

    public function ceklogin(Request $request){
        $el = new masyarakat();
        // cek username dan password exists (ada) di tabel masyarakat
        if($el->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
            return redirect('/');

        }
        return back()->with('pesan','Username dan password tidak terdaftar');
    }
     
    public function tambah(request $request){
        return view ('tambah');
    }

}

