<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscricaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscricaos', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('pessoa_id');
            $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade')->onUpdate('cascade');
            $table->UnsignedBigInteger('capacitacao_id');
            $table->foreign('capacitacao_id')->references('id')->on('capacitacaos')->onDelete('cascade')->onUpdate('cascade');
            $table->string("qtde_apostila")->nullable();
            $table->string("desconto")->nullable();
            $table->string("valortotal_apostila")->nullable();
            $table->string("forma_pagamentoapostila")->nullable();
            $table->string("presenca")->nullable();
            $table->string("status_pagamento_apostila")->nullable();
            $table->string("status_pagamento_capacitacao")->nullable();
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
        Schema::dropIfExists('inscricaos');
    }
}
