<?php

namespace Pterodactyl\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'Pterodactyl\Models\Server' => 'Pterodactyl\Policies\ServerPolicy',
        'Pterodactyl\Models\APIKey' => 'Pterodactyl\Policies\APIKeyPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}
