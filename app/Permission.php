<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    // Retorna todos os Roles que estão vinculados as permissões
    public function roles()
    {
    	//Relacionamento many to many
    	return $this->belongsToMany(\App\Role::class);
    }
}
