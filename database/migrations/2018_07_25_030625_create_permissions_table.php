<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            //Nome da Permissão
            $table->string('name', 50);
            //Identificar permissão
            $table->string('label',200);
            $table->timestamps();
        });
        //Juntar roles com Permissões
        Schema::create('permission_role', function (Blueprint $table) {
            $table->increments('id');
           
            $table->integer('permission_id')->unsigned();
            $table->integer('role_id')->unsigned();

            //Pega ID da permissao na tabela permissão e faz de chave estrangeira 
            $table->foreign('permission_id')
                  ->references('id')
                  ->on('permissions');
            

            //Pega ID do Role e faz de chave estrangeira 
            $table->foreign('role_id')
                  ->references('id')
                  ->on('roles');
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission_role');
        Schema::dropIfExists('permissions');
    }
}
