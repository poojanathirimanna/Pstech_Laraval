<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (config('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }

        // Share categories with all views
        View::composer('*', function ($view) {
            $categories = Category::orderBy('name')->get();
            $view->with('globalCategories', $categories);
        });
    }
}
