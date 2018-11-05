<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/5/18
 * Time: 5:20 PM
 */

namespace DesignPatterns\Creational\SimpleFactory;


class SimpleFactory
{
    public function createBicycle()
    {
        return new Bicycle();
    }
}