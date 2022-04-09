<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketKurikulumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_kurikulums', function (Blueprint $table) {
            $table->id();
            $table->integer('idKurikulum');        
            $table->string('tingkat');  
            $table->string('prodi');  
            $table->string('semester');   
            $table->integer('idMataKuliah');     
            $table->integer('sksMataKuliah');         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket_kurikulums');
    }
}
