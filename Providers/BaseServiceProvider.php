<?php

namespace Modules\Base\Providers;

use Illuminate\Support\ServiceProvider;

class BaseServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(AppServiceProvider::class);
        $this->app->register(BladeServiceProvider::class);
        $this->app->register(MacroServiceProvider::class);

        $this->app->register(RouteServiceProvider::class);
        $this->app->register(SidebarServiceProvider::class);
        $this->app->register(BreadcrumbsServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('module/base/base.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'module.base.base'
        );
        /**
         * App
         */
        $this->publishes([
            __DIR__.'/../Config/app.php' => config_path('app.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/app.php', 'app'
        );
        /**
         * Locale
         */
        $this->publishes([
            __DIR__.'/../Config/locale.php' => config_path('locale.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/locale.php', 'locale'
        );
         /**
          * Breadcrumbs
          */
         $this->publishes([
             __DIR__.'/../Config/breadcrumbs.php' => config_path('breadcrumbs.php'),
         ], 'config');
         $this->mergeConfigFrom(
             __DIR__.'/../Config/breadcrumbs.php', 'breadcrumbs'
         );
         /**
          * Log-Viewer
          */
         $this->publishes([
             __DIR__.'/../Config/log-viewer.php' => config_path('log-viewer.php'),
         ], 'config');
         $this->mergeConfigFrom(
             __DIR__.'/../Config/log-viewer.php', 'log-viewer'
         );
         /**
          * No-Captcha
          */
         $this->publishes([
             __DIR__.'/../Config/no-captcha.php' => config_path('no-captcha.php'),
         ], 'config');
         $this->mergeConfigFrom(
             __DIR__.'/../Config/no-captcha.php', 'no-captcha'
         );
         /**
          * Analytics
          */
         $this->publishes([
             __DIR__.'/../Config/analytics.php' => config_path('analytics.php'),
         ], 'config');
         $this->mergeConfigFrom(
             __DIR__.'/../Config/analytics.php', 'analytics'
         );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = base_path('resources/views/modules/base');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ]);

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/base';
        }, \Config::get('view.paths')), [$sourcePath]), 'base');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = base_path('resources/lang/modules/base');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'base');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'base');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
