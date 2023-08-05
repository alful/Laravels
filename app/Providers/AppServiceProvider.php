<?php

namespace App\Providers;

use view;
use App\Models\Post;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
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
        //
        // untuk pakai paginator(next/previous page) framework bootsrap
        Paginator::useBootstrap();

        Gate::define('is_admin', function (User $user) {
            return $user->is_admin;
        });

        // view()->share()


        // view()->share('postss', Post::with('image')->latest()->take(3)->get());

        // view()->composer('slider', function ($view) {
        //     view()->with('posts', Post::latest()->take(3)->get());
        // });
    }
}
