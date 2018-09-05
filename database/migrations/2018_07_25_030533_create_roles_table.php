<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            //Nome da Permissão
            $table->string('name', 50);
            //Identificar permissão
            $table->string('label',200);
            $table->timestamps();
        });

          //Juntar roles com usuários
        Schema::create('role_user', function (Blueprint $table) {
            $table->increments('id');

            //Pega ID do Role e faz de chave estrangeira 
            $table->integer('role_id')->unsigned();
            //Pega ID do usuario na tabela users e faz de chave estrangeira 
            $table->integer('user_id')->unsigned();
        


            $table->foreign('role_id')
                  ->references('id')
                  ->on('roles');
            


            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_user');
        Schema::dropIfExists('roles');

    }
}
