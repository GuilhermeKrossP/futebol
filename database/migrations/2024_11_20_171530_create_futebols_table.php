<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('futebols', function (Blueprint $table) {
            $table->id();
            $table->string('nome_do_time');
            $table->string('capitao');
            $table->integer('treinador_id')->unsigned();  //Usado para iniciar a relação - criando a coluna treinador_id 
            $table->foreign('treinador_id')->references('id')->on('treinadors'); //Relacionado a colunado as 2 colunas do "treinador"
            $table->integer('pontuacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('futebols');
    }
};
