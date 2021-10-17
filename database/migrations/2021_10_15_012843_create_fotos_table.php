<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotosTable extends Migration
{

    public function up()
    {
        Schema::create('fotos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estabelecimento_id');
            $table->string('nome_arquivo');
            $table->string('disk')->nullable();
            $table->string('path');
            $table->enum('tipo', ['propriedade', 'documento']);
            $table->timestamps();

            $table->foreign('estabelecimento_id')->references('id')->on('estabelecimentos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('fotos');
    }
}
