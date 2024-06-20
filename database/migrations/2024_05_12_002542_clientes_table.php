<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('idCliente'); // Define 'idCliente' como a chave primária
            $table->string('nomeCliente');
            $table->string('telefoneCliente')->nullable();
            $table->string('enderecoCliente')->nullable();
            $table->string('cidadeCliente')->nullable();
            $table->string('estadoCliente')->nullable();
            $table->string('cepCliente')->nullable();
            $table->timestamps();
        });
    }
    
        public function down()
        {
            Schema::dropIfExists('clientes');
        }
    
};

