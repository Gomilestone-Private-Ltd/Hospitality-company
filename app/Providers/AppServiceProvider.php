<?php

namespace App\Providers;

use Schema;
use App\Models\Setting;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;

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

        if(Schema::hasTable('settings') && Schema::hasTable('categories')){
            $setting = Setting::select('logo','favicon','app_name')->whereId(1)->first();
            $categories = Category::select('id','name','image','slug')->with(['getSubCategory'])->where('status',1)->get();
            View::share(['setting'=>$setting,'categories'=>$categories]);
        }
        //Paginator::useBootstrap();
        //Paginator::useBootstrapFour();
        
    }
}
