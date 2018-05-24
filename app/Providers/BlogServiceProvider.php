<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //

        $this->topMenu();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    //Top menu users

    public function topMenu()
    {
        View::composer('layouts.header', function ($view) {
            $view->with('categories', \App\Category::where('parent_id', 0)->where('published', 1)->get());
        });
    }

}
