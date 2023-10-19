<?php

namespace App\Http\Controllers;

use App\Models\petugas;
use Illuminate\Http\Request;

class Administrator_Controller extends Controller
{
    public function loginadmin(){
        //buat objek model
        return view('admin.loginadmin');
    }

    public function ceklogin(Request $request){
        $ol = new petugas();
        $ol = $ol->where('username',$request->input('username'))->where('password',$request->input('password'));
        
        if($ol->exists()){
            session([
                'username'=>$request->input('username'),
                'password'=>$request->input('password')
            ]);
            return redirect('/admin');
        }
        return 'login gagal';

    }

    public function dashboardadmin(){
        return view('admin.dashboardadmin');
    }
}
