<?php

namespace App\Providers;

use App\Courses;
use App\Keywords;
use App\News;
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
            $tracuu = News::all()->where('category',3);
            $phanmem = Softwares::all();
            $tintuc = News::all()->where('category',1);
            $tuyendung = News::all()->where('category',2);
            $view->with(['ten_khoahoc'=>$ten_khoahoc,'tracuu'=>$tracuu, 'phanmem'=>$phanmem,'tintuc'=>$tintuc,'tuyendung'=>$tuyendung]);
        });
        view()->composer('front-end/inc/header_home',function($view){
            $ten_khoahoc=Courses::all();
            $tracuu = News::all()->where('category',3);
            $phanmem = Softwares::all();
            $tintuc = News::all()->where('category',1);
            $tuyendung = News::all()->where('category',2);
            $view->with(['ten_khoahoc'=>$ten_khoahoc,'tracuu'=>$tracuu, 'phanmem'=>$phanmem,'tintuc'=>$tintuc,'tuyendung'=>$tuyendung]);
        });


        view()->composer('front-end/inc/footer', function($view){
            $key = Keywords::all();
            $tintuc = News::where('category',1)->orderBy('id', 'desc')->limit(4)->get();
            $view->with(['key'=>$key,'tintuc'=>$tintuc]);
        });
        view()->composer('front-end/inc/footer_home', function($view){
            $key = Keywords::all();
            $tintuc = News::where('category',1)->orderBy('id', 'desc')->limit(4)->get();
            $view->with(['key'=>$key,'tintuc'=>$tintuc]);
        });
    }
}
