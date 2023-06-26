<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::before(function (\App\Models\User $user, string $ability) {
            if ($user->is_admin) {
                return true;
            }
        });

        Gate::define('modify', function (\App\Models\User $user) {
            return $user->is_mod;
        });

        Gate::define('rate', function (\App\Models\User $user, \App\Models\Rating $rating) {
            return $user->id === $rating->user_id;
        });
    }
}
