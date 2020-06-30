<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('cpf', 11);
            $table->date('data_nasc');
            $table->string('rg', 20)->nullable()->default(NULL);
            $table->string('local_nasc', 2);
            $table->string('telefone', 11)->nullable()->default(NULL);
            $table->integer('usuario_cadastro');
            $table->integer('usuario_update')->nullable()->default(NULL);
            //$table->timestamps('data_cad');
           // $table->timestamps('data_atu');
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
        Schema::dropIfExists('pessoas');
    }
}
