<?php

namespace Baijunyao\LaravelDingtalk;

use Illuminate\Support\ServiceProvider;

class DingtalkProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 发布配置项
        $this->publishes([
            __DIR__.'/config/dingtalk.php' => config_path('dingtalk.php'),
        ]);
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
