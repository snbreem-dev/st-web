<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
//use Illuminate\Support\Facades\Schema;

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
        //Schema::defaultStringLength(191);

        View::share('course','Web');
        $colleges = ['IT', 'Economy'];
        View::share('colleges',$colleges);

        Blade::directive('store',function ($expression){
            return "<?php echo 'welcome to '.$expression?>";
        });
    }
}
