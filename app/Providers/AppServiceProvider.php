<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Models\Cart;
use Illuminate\Support\ServiceProvider;

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
  View::share([
        'cartCount' => 0,
        'cartTotal' => 0,
    ]);

    $this->app->booted(function () {
        try {
            View::share([
                'cartCount' => Cart::count(),
                'cartTotal' => Cart::sum('total'),
            ]);
        } catch (\Exception $e) {
            // Database not ready yet
        }
    });
        //
    }
}
