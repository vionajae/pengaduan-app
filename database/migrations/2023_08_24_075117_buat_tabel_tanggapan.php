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
        Schema::create('tanggapan',function(Blueprint $tanggapann){
            $tanggapann->integer('id_tanggapan')->primary();
            $tanggapann->integer('id_pengaduan');
            $tanggapann->date('tgl_tanggapan');
            $tanggapann->text('tanggapan');
            $tanggapann->integer('id_petugas');
            $tanggapann->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('tanggapan');
    }
};
