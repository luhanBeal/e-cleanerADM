<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->id();

            $table->string('nome');
            $table->decimal('valor_minimo', 10, 2); //12345678,90
            $table->integer('quantidade_horas');
            $table->decimal('porcentagem'); //comissao do site
            //quarto
            $table->decimal('valor_quarto');
            $table->integer('horas_quarto');
            //sala
            $table->decimal('valor_sala');
            $table->integer('horas_sala');
            //banheiro
            $table->decimal('valor_banheiro');
            $table->integer('horas_banheiro');
            //cozinha
            $table->decimal('valor_cozinha');
            $table->integer('horas_cozinha');
            //quintal
            $table->decimal('valor_quintal');
            $table->integer('horas_quintal');
            //outros
            $table->decimal('valor_outros');
            $table->integer('horas_outros');

            $table->string('icone');
            $table->integer('posicao');

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
        Schema::dropIfExists('servicos');
    }
}
