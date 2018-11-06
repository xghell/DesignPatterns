<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/6/18
 * Time: 5:15 PM
 */

namespace DesignPatterns\Structural\DataMapper;


class User extends DatabaseAdapter
{
    protected $username;
    protected $phone;

    public function __construct()
    {
        $user_table = $this->findTableByModel('User');
        $this->createUserFromData($user_table);
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    protected function createUserFromData($user_table)
    {
        $this->username = $user_table['username'];
        $this->phone = $user_table['phone'];
    }
}