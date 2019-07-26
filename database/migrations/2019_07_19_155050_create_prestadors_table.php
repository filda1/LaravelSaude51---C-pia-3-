<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestadors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('especialidade');
            $table->string('nome');
            $table->string('morada');
            $table->string('localidade');
            $table->string('codigo_Postal');
            $table->string('concelho');
            $table->string('distrito');
            $table->string('telefone');
            $table->string('email');
            $table->string('notas');
            $table->string('preo');
            $table->string('desconto');
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
        Schema::dropIfExists('prestadors');
    }
}
