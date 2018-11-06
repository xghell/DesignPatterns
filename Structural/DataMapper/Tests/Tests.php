<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/6/18
 * Time: 5:21 PM
 */

namespace DesignPatterns\Structural\DataMapper\Tests;


use DesignPatterns\Structural\DataMapper\User;
use PHPUnit\Framework\TestCase;

class Tests extends TestCase
{
    public function testCanCreateUserFromData()
    {
        $user = new User();
        $this->assertEquals('wangxiguang', $user->getUsername());
        $this->assertEquals('12345678901', $user->getPhone());
    }
}