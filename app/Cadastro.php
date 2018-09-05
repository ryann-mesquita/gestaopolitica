<?php


namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Iatstuti\Database\Support\NullableFields;

class Cadastro extends Model
{
   
    use NullableFields;

    protected $nullable = [
        'nfilhos','telefone','whatsapp'
    ];
    protected $fillable = [
 			'name','apelido','date','cep','cidade','endereco',
 			'complemento','bairro','numero','lider','sublider','localidade','nomedamae','localdevotacao'
 			,'facebook','instagram','titulo','zona','secao','refarea',
    ]; // Lista Branca(colunas que podem ser preenchidas)*/
    //protected $guarded  = ['admin'];//Lista Negra(Colunas que não podem ser preenchidas)

}
