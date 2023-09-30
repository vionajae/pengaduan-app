<?php

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
    return view('tampilan_utama');
});


//data masyarakat
Route::get('masyarakat',[MasyarakatController::class,'index']);
Route::get('tambah',[MasyarakatController::class,'tambah']);



Route::get('registrasi',[MasyarakatController::class,'registrasi']);
Route::post('ol',[MasyarakatController::class,'masyarakat']);
Route::get('login',[MasyarakatController::class,'login']);
Route::post('login',[MasyarakatController::class,'ceklogin']);



