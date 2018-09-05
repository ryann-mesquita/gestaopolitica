<?php

namespace App\Providers;

use App\Model\Painel\Product;
use App\User;
use App\Permission;

use App\Policies\ProductPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
       // Product::class => ProductPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies(); 

        //Recupera as permissões e recupera as regras de cada permissão
        //with('roles') ---> é o método da model permission
        $permissions = Permission::with('roles')->get();

        //dd($permissions) retorna um array com as permissões e o relacionamento com os roles
        //foreach para listar as permissões
        foreach($permissions as $permission)
        {
            Gate::define( $permission->name, function(User $user) use ($permission){
                    return $user->hasPermission($permission);
            });
        }

            // Before verifica antes do de cima. $ability(view_post, edit_post, delete_post)

            Gate::before(function(User $user, $ability)
            {
                /*Se o usuário tiver esse perfil('adm') vinculado a ele,
                 ele permite o acesso e já retorna true*/
                if( $user->hasAnyRoles('adm'))
                    return true;
            });
    }
}
