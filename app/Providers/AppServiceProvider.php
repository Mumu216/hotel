<?php

namespace App\Providers;
use App\Models\Category;
use App\Models\Room;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


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
        

        $categories=Category::all();
        $rooms=Room::all();

        View::share('categories', $categories);
        View::share('rooms', $rooms);



    }
}
