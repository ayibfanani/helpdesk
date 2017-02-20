<?php

namespace App\Providers;

use App\Sites\SiteRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
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

            if (is_null($site)) {
                abort(404, 'Not Found Boss');
            }

            return $site;
        });
    }
}
