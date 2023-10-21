<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    use HasFactory;
    //set tabel
    protected $table='petugas';
    //set primary key
    protected $primaryKey='id_petugas';
    public $incrementing=false;
    //set data primary key
    //string kolom yang dapat diisi secara massal
    protected $guarded=[]; 

}
