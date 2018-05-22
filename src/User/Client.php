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
     * 获取全部员工
     *
     * @return array
     */
    public function all()
    {
        // 获取全部部门
        $department = $this->app->department->list();
        $userList = collect([]);
        foreach ($department['department'] as $k => $v) {
            // 获取部门下的成员
            $user = $this->app->user->list($v['id']);
            $userList = $userList->merge($user['userlist']);
        }
        // 因为员工可能存在跨部门的情况；所以此处需要根据员工 unionid 去重
        return $userList->unique('unionid');
    }

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
