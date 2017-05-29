<?php

namespace App\Providers;

use App\Services\Decorator\LogDecorator;
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
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Interface binding
        $this->app->bind(\App\Services\Contract\FtpStorage::class, \App\Services\FtpStorage::class);

        //String binding
        $this->app->bind('fs.cache', \App\Services\CacheStorage::class);

        //Singleton

        //Decoration


        //On resolving
        $this->app->resolving(\App\Services\Contract\FtpStorage::class, function ($app) {
            $logger = $app->make('log');
            $decorator = new LogDecorator($app->make(\App\Services\Contract\FtpStorage::class));
            $decorator->setLogger($logger);

            return $decorator;
        });

    }
}
