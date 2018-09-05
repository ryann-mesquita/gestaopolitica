<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Permission;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
     // Vai retornar quais são os roles que estão associados ao usuário
       return $this->belongsToMany(\App\Role::class);
    }

    public function hasPermission(Permission $permission)
    {
        /*Recupera as permissões e os roles que estão ligados a ela
        Ex: view_post-> Manager,adm.. e passa para o hasAnyRoles,  e verifica se o usuário logado 
        tem os roles atribuído a essa
        função verificada no momento se sim acessa, senão bloqueia 
        */ 
         
         return $this->hasAnyRoles($permission->roles);
    }

    public function hasAnyRoles($roles)
    {
        // verifica se o usuário logado tem esse role 
        if(is_array($roles) || is_object($roles))
        {
            return !! $roles->intersect($this->roles)->count();
        }

        return $this->roles->contains('name', $roles);
    }
}
