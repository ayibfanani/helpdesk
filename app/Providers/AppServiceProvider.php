<?php

namespace App\Providers;

use App\Sites\SiteRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
            'site' => 'App\Sites\Site',
            'role' => 'App\Roles\Role',
        ]);

        /**
         * Require helpers
         */
        require_once __DIR__ . '/../helpers.php';
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Set global site
        $this->app->bind(SiteRepository::class, SiteRepository::class);
        $this->app->singleton('currentSite', function () {
            $host = request()->getHttpHost();
            $subdomain = explode('.', $host)[0];
            $site = app(SiteRepository::class)->getSite($subdomain);

            return $site;
        });
    }
}
