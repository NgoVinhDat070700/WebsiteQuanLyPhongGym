<?php

namespace App\Providers;

use App\Blog;
use App\Dichvu;
use Illuminate\Support\Facades\DB;
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
        view()->composer('layouts.menudacap',function($view){
            $dichvu = Dichvu::all();
            $blog = DB::table('blog')
                    ->join('dichvu', 'blog.dichvu_id', '=', 'dichvu.id')
                    ->select('blog.*','dichvu.tendichvu as tendv')
                    ->get();
            $view->with(['dichvu'=>$dichvu,'blog'=>$blog]);
        });
    }
}
