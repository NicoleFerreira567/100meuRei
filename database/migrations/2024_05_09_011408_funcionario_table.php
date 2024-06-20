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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nomeFuncionario', 255);
            $table->date('dataNascFuncionario');
            $table->string('foneFuncionario', 20);
            $table->string('enderecoFuncionario', 255);
            $table->string('cidadeFuncionario', 100);
            $table->string('estadoFuncionario', 50);
            $table->string('cepFuncionario', 10);
            $table->timestamp('dataContrataçãoFuncionario');
            $table->string('cargoFuncionario', 100);
            $table->decimal('salarioFuncionario', 10, 2);
            $table->enum('tipo_funcionario', ['admin', 'gestores']);
            $table->enum('statusFuncionario', ['ativo', 'inativo']);
            $table->timestamps(); // Laravel adiciona automaticamente created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
};
