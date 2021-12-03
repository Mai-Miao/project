<?php

namespace App\Providers;

use App\Models\People;
use App\Observers\PeopleObserver;
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
        // 事件观察者的绑定
        People::observe(PeopleObserver::class);  // 用户模型的绑定
    }
}
