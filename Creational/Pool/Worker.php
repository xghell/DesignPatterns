<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/5/18
 * Time: 7:33 PM
 */

namespace DesignPatterns\Creational\Pool;


class Worker
{
    public static $counter = 0;
    public function __construct()
    {
        ++self::$counter;
    }
}