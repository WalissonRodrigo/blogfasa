<?php

namespace blog\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use blog\Models\User;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'blog\Model' => 'blog\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        Gate::define('admin', function ($user){
            if($user->isAdministrador())
                return true;
            else
                return redirect()->abort(404);
        });

        Gate::define('moderador', function ($user){
            if($user->isModerador())
                return true;
            else
                return redirect()->abort(404);
        });

        Gate::define('usuario', function ($user){
            if($user->isUsuario())
                return true;
            else
                return redirect()->abort(404);
        });
    }
}
