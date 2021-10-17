<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsavelsTable extends Migration
{

    public function up()
    {
        Schema::create('responsavels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estabelecimento_id');
            $table->string('nome');
            $table->string('rg');
            $table->string('cpf');
            $table->timestamps();

            $table->foreign('estabelecimento_id')->references('id')->on('estabelecimentos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('responsavels');
    }
}
