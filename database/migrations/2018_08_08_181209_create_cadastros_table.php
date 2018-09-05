<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadastrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->string('apelido', 150)->nullable();
            $table->string('endereco', 150);                
            $table->string('cep', 8)->nullable();
            $table->string('localidade', 150);  
            $table->string('cidade', 150);
            $table->string('complemento', 150);
            $table->string('bairro', 150);
            $table->string('numero');
            $table->string('nomedamae', 150)->nullable();
            $table->string('localdevotacao', 150)->nullable();

                              
            $table->integer('telefone')->nullable();
            $table->integer('whatsapp')->nullable();
            $table->string('facebook', 150)->nullable();
            $table->string('instagram', 150)->nullable();
            $table->string('titulo',12)->unique();
            $table->string('zona',4);
            $table->string('secao',4);
            $table->date('date');
            $table->string('refarea', 150)->nullable();
            $table->string('lider', 150);
            $table->string('sublider', 150)->nullable();


            
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
        Schema::drop('cadastros');
    }
}
