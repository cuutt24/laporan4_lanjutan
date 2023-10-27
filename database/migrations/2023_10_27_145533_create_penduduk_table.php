<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendudukTable extends Migration
{
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status');
            $table->unsignedBigInteger('desa_id'); // Kunci asing ke tabel 'desa'
            $table->timestamps();
            $table->softDeletes();

            // Definisikan kunci asing ke tabel 'desa'
            $table->foreign('desa_id')->references('id')->on('desa');
        });
    }

    public function down()
    {
        Schema::dropIfExists('penduduk');
    }
}

