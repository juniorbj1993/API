<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestadordeservicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestadordeservicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img');
            $table->string('nome');
            $table->string('telefone');
            $table->string('email')->unique();
            $table->string('cpf')->unique();
            $table->string('rg')->unique();
            $table->string('categoria');
            $table->string('funcao');
            $table->string('estado');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('rua');
            $table->string('numero');
            $table->string('curriculos');
            $table->string('estrelas');
            $table->string('nome_pai');
            $table->string('nome_mae');
            $table->string('estado_civil');
            $table->string('datadenascimento');
            $table->string('nacionalidade');
            $table->string('naturalidade');
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
        Schema::dropIfExists('prestadordeservicos');
    }
}
