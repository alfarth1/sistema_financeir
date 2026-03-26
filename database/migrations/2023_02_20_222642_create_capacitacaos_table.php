<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapacitacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capacitacaos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('tema');
            $table->string('data');
            $table->string('status')->nullable();
            $table->string('valor_apostila')->nullable();
            $table->string('valor_capacitacao')->nullable();
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
        Schema::dropIfExists('capacitacaos');
    }
}
