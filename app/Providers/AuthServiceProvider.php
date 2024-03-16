<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Store;
use App\Policies\StoresPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Store::class => StoresPolicy::class,
    ];

    /**  protected $policies = [
       
    
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('store-view', 'App\Policies\StoresPolicy@view');
    }
}
