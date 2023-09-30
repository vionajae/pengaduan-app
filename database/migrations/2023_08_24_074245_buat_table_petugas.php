<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('petugas',function(Blueprint $tugas){
            $tugas->integer('id_petugas')->primary();
            $tugas->string('nama_petugas',35);
            $tugas->string('username',25);
            $tugas->string('password',32);
            $tugas->string('telp',13);
            $tugas->enum('level',['admin','petugas']);
            $tugas->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('petugas');
    }
};
