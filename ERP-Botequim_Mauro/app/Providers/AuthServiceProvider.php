<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [

    ];

    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('view-user-attendant', function ($user) {
            return $user->hasPermission('view-user-attendant');
        });
    
        Gate::define('view-user-accountant', function ($user) {
            return $user->hasPermission('view-user-accountant');
        });
        
        Gate::define('view-user-stock', function ($user) {
            return $user->hasPermission('view-user-stock');
        });
    }
}
