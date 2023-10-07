<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Administrator_Controller extends Controller
{
    public function loginadmin(){
        //buat objek model
        return view('admin.loginadmin');
    }

    public function dashboardadmin(){
        return view('admin.dashboardadmin');
    }
}
