<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use SoftInvest\Console\Commands\MigratePlpgsqlCommand;

class ArtisanServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MigratePlpgsqlCommand::class,
            ]);
        }
    }
}
