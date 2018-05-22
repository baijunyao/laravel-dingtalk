<?php

namespace Baijunyao\LaravelDingtalk;

use EasyDingTalk\Application;
use Baijunyao\LaravelDingtalk\User;

class Dingtalk extends Application
{
    /**
     * @var array
     */
    protected $providers = [
        \EasyDingTalk\Auth\ServiceProvider::class,
        \EasyDingTalk\Chat\ServiceProvider::class,
        \EasyDingTalk\Role\ServiceProvider::class,
        User\ServiceProvider::class,
        \EasyDingTalk\Jssdk\ServiceProvider::class,
        \EasyDingTalk\Media\ServiceProvider::class,
        \EasyDingTalk\Kernel\ServiceProvider::class,
        \EasyDingTalk\Checkin\ServiceProvider::class,
        \EasyDingTalk\Message\ServiceProvider::class,
        \EasyDingTalk\Attendance\ServiceProvider::class,
        \EasyDingTalk\Department\ServiceProvider::class,
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