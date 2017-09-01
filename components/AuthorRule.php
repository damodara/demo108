<?php

namespace app\components;

use yii\rbac\Rule;

/**
 * Created by PhpStorm.
 * User: DDas
 * Date: 001 01.09.17
 * Time: 1:58
 */
class AuthorRule extends Rule
{
    public $name = 'isAuthor';
    public function execute($user, $item, $params)
    {
        return isset($params['post']) ? $params['post']->user_id == $user : false;
    }
}