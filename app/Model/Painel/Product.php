<?php

namespace App\Model\Painel;

use Illuminate\Database\Eloquent\Model;
use Iatstuti\Database\Support\NullableFields;

class Product extends Model
{
   
    use NullableFields;

    protected $nullable = [
        'nfilhos','telefone','whatsapp'
    ];
    protected $fillable = [
 			'name','email','date','active','sexo','cep','cidade','endereco',
 			'complemento','bairro','numero','religiao','formacao','lideranca',
 			'prioridade','nfilhos','telefone','whatsapp','description','user_id','lider','localidade'
    ]; // Lista Branca(colunas que podem ser preenchidas)
    //protected $guarded  = ['admin'];//Lista Negra(Colunas que não podem ser preenchidas)

}
