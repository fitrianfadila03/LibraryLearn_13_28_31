<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id(); 
            $table->string('judul'); 
            $table->string('penulis'); 
            $table->integer('tahun_terbit');
            $table->string('uraian');
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('bukus'); // Menghapus tabel jika rollback
    }
}