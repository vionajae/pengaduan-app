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
        Schema::create('pengaduan',function(Blueprint $pengadu){
            $pengadu->integer('id_pengaduan')->primary();
            $pengadu->date('tgl_pengaduan');
            $pengadu->char('nik',16);
            $pengadu->text('isi_laporan');
            $pengadu->string('foto',225);
            $pengadu->enum('status',['proses','selesai']);
            $pengadu->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('pengaduan');
    }
};
