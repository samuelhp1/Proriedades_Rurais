<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuario extends Migration
{
    

    // sempre rodar o php artisan migrate ao criar novo migration
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
           
            $table->string('login');
            $table->string('senha');
            $table->timestamps();

           
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
