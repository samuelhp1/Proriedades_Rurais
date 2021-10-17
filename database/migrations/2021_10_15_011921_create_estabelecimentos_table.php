<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstabelecimentosTable extends Migration
{

    public function up()
    {
        Schema::create('estabelecimentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cnpj',20);
            $table->string('endereco');
            $table->char('telefone')->nullable();
            $table->char('celular')->nullable();
            $table->char('whatsapp')->nullable();
            $table->longText('servicos');
            $table->date('data_inauguracao');
            $table->longText('diferencial');
            $table->longText('proposta_trabalho');
            $table->longText('publico_alvo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estabelecimentos');
    }
}
