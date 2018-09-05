<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Método que retorne as permissões através dos roles
    public function permissions()
    {
    	return $this->belongsToMany(\App\Permission::class);
    }
}
