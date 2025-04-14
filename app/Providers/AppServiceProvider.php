<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->loadMigrationsFrom([
            'database/migrations/users',
            'database/migrations/specifications',
            'database/migrations/specifications/size',
            'database/migrations/specifications/form',
            'database/migrations/specifications/frequencies',
            'database/migrations/components',
        ]);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
