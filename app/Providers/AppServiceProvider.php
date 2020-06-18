<?php

namespace App\Providers;

use App\Courses;
use App\Searchs;
use App\Softwares;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('front-end/inc/header',function($view){
            $ten_khoahoc=Courses::all();
            $tracuu = Searchs::all();
            $phanmem = Softwares::all();
            $view->with(['ten_khoahoc'=>$ten_khoahoc,'tracuu'=>$tracuu, 'phanmem'=>$phanmem]);
        });
    }
}
