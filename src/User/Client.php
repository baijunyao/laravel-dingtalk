<?php

/*
 * This file is part of the mingyoung/dingtalk.
 *
 * (c) mingyoung <mingyoungcheung@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Baijunyao\LaravelDingtalk\User;

use EasyDingTalk\User\Client as BaseUserClient;

/**
 * Class Client.
 *
 * @author mingyoung <mingyoungcheung@gmail.com>
 */
class Client extends BaseUserClient
{

    /**
     * @param int   $departmentId
     * @param int   $size
     * @param int   $offset
     * @param array $params
     *
     * @return array
     */
    public function list(int $departmentId, int $size = 100, int $offset = 0, array $params = [])
    {
        return $this->httpGet('user/list', [
                'department_id' => $departmentId,
                'offset' => $offset,
                'size' => $size,
            ] + $params);
    }
}
