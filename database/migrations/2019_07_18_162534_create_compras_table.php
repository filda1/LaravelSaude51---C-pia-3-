<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
          
   $table->bigIncrements('id');
   $table->string('email');
   $table->string('name');
   $table->integer('nif');
   $table->string('name_prestador');
   $table->integer('cartao');
   $table->string('image'); 
   $table->string('promocoes'); 
   $table->string('vauchers'); 
   $table->string('body');
   $table->string('n2');
   $table->string('n3');
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
        Schema::dropIfExists('compras');
    }
}
