<?php

namespace Baijunyao\LaravelDingtalk;

use EasyDingTalk\Application;

class Dingtalk extends Application
{
    /**
     * 新开发的模块会推送到 mingyoung/dingtalk 然后升级删除本地模块
     * 
     * @var array
     */
    protected $providers = [
        \EasyDingTalk\Auth\ServiceProvider::class,
        \EasyDingTalk\Chat\ServiceProvider::class,
        \EasyDingTalk\Role\ServiceProvider::class,
        \EasyDingTalk\Jssdk\ServiceProvider::class,
        \EasyDingTalk\Media\ServiceProvider::class,
        \EasyDingTalk\Kernel\ServiceProvider::class,
        \EasyDingTalk\Report\ServiceProvider::class,
        \EasyDingTalk\Checkin\ServiceProvider::class,
        \EasyDingTalk\Message\ServiceProvider::class,
        \EasyDingTalk\Process\ServiceProvider::class,
        \EasyDingTalk\Microapp\ServiceProvider::class,
        \EasyDingTalk\Attendance\ServiceProvider::class,
        \EasyDingTalk\Department\ServiceProvider::class,
        \Baijunyao\LaravelDingtalk\User\ServiceProvider::class,
    ];

    /**
     * Application constructor.
     *
     * @param array $config
     */
    public function __construct($config = null)
    {
        $config = is_null($config) ? config('dingtalk') : $config;
        parent::__construct($config);
    }
}