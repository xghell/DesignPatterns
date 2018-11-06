<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/6/18
 * Time: 5:06 PM
 */

namespace DesignPatterns\Structural\DataMapper;


class Database
{
    protected static $userTable = [
        'username' => 'wangxiguang',
        'phone' => '12345678901'
    ];

    public static function getUserTable()
    {
        return self::$userTable;
    }
}