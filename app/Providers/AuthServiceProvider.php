<?php

namespace blog\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use blog\Models\User;
use blog\Models\Permission;
use blog\Models\Role;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        try{
            $permissions = Permission::with('roles')->get();
            
            foreach($permissions as $permission)
            {
                Gate::define($permission->name, function(User $user) use($permission)
                {
                    return $user->hasPermission($permission);
                });
            }
            Gate::before(function(User $user, $ability){
                if($user->hasAnyRoles('Administrador'))
                    return true;
            });
        }
        catch(QueryException $e)
        {
            
        }
    }
}
