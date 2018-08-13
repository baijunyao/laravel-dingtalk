<?php

namespace Baijunyao\LaravelDingtalk;

use Illuminate\Support\ServiceProvider;

class DingtalkServiceProvider extends ServiceProvider
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
            __DIR__.'/config/laravel-dingtalk.php' => config_path('laravel-dingtalk.php'),
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
