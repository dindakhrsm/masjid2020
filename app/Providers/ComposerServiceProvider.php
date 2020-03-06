<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Post;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('layouts.sidebar', function($view)
        {
            $popularPosts = Post::published()->take(3)->get();
            return $view->with('popularPost', $popularPosts);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
