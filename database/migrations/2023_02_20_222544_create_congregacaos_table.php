<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCongregacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('congregacaos', function (Blueprint $table) {
            $table->id();
            // chaves estrangeiras
            $table->UnsignedBigInteger('setor_id');
            $table->foreign('setor_id')->references('id')->on('setors')->onDelete('cascade')->onUpdate('cascade');
            $table->string("nome");
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
        Schema::dropIfExists('congregacaos');
    }
}
