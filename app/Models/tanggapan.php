<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tanggapan extends Model
{
    use HasFactory;
     //set tabel
     protected $table='tanggapan';
     //set primary key
     protected $primaryKey='nik';
     public $incrementing=false;
     //set data primary key
     protected $keyType='string';
     //string kolom yang dapat diisi secara massal
     protected $guarded=[]; 
}
