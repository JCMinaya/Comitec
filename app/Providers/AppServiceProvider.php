<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.default', function($view)
        {
            $sections = explode('/', Request::path());
            array_unshift($sections, 'Home');
            // dd(print_r($sections));
            $view->with('sections', $sections);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'local') {
            $this->app->register('Laracasts\Generators\GeneratorsServiceProvider');
        }
    }
}
