<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->string('email')->nullable();
            
            $table->date('date');
           
            //$table->boolean('active');
            $table->boolean('sexo');
            $table->string('cep', 150)->nullable();
            $table->string('cidade', 150);
            $table->string('endereco', 150);
            $table->string('complemento', 150);
            $table->string('bairro', 150);
            $table->integer('numero');
            $table->string('religiao', 150)->nullable();
            $table->enum('category',['eletronicos','moveis','limpeza','banho']);
            $table->enum('formacao',['fundamental','medio','superior']);
            $table->enum('lideranca',['alta','normal','baixa']);
            $table->enum('prioridade',['alta','normal','baixa']);
            $table->integer('nfilhos')->nullable();
            $table->integer('telefone')->nullable();
            $table->integer('whatsapp')->nullable();
            $table->string('image',200)->nullable();
            


            $table->text('description');
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
        Schema::drop('products');
    }
}
