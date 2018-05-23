<?php

/*
 * This file is part of the mingyoung/dingtalk.
 *
 * (c) baijunyao <baijunyao@baijunyao.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Baijunyao\LaravelDingtalk\Microapp;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ServiceProvider.
 *
 * @author baijunyao <baijunyao@baijunyao.com>
 */
class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['microapp'] = function ($app) {
            return new Client($app);
        };
    }
}
