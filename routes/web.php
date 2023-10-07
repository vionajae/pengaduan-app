<?php

use App\Http\Controllers\Administrator_Controller;
use App\Http\Controllers\MasyarakatController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('tambah');
});


//data masyarakat
Route::get('masyarakat',[MasyarakatController::class,'index']);
Route::get('tambah',[MasyarakatController::class,'tambah']);



Route::get('registrasi',[MasyarakatController::class,'registrasi']);
Route::post('ol',[MasyarakatController::class,'masyarakat']);
Route::get('login',[MasyarakatController::class,'login']);
Route::post('login',[MasyarakatController::class,'ceklogin']);
Route::get('dashboard',[MasyarakatController::class,'dashboard']);

//data administrator
Route::get('admin',[Administrator_Controller::class,'loginadmin']);

Route::get('/');