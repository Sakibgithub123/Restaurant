<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       View::composer('frontEnd.menu.menu',function ($view){
           $view->with('categories',Category::where('status',1)->get());
       });
        View::composer('frontEnd.menu.menu2',function ($view){
            $view->with('categories',Category::where('status',1)->get());
        });
        View::composer('frontEnd.menu.all-menu',function ($view){
            $view->with('categories',Category::where('status',1)->get());
        });


    }

}
