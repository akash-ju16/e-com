<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Gates\AdminGate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        'App\Models\Categorie' => 'App\Policies\CategoriePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //way-1<<>>direct
        // Gate::define('isAdmin', function($user){

        //     //  dd($user);
        //         if ($user->level === 'admin') {
        //             return true;
        //         }{
        //             return false;
        //         }
        // });

        //way-2<<>>from file
        Gate::define('isAdmin', [AdminGate::class, 'check_admin']);

    }
}
