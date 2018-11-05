<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/5/18
 * Time: 5:35 PM
 */

namespace DesignPatterns\Creational\StaticFactory;


class StaticFactory
{
    public static function build(string $type): Format
    {
        switch ($type) {
            case 'string':
                return new FormatString();
            case 'number':
                return new FormatNumber();
            default:
                throw new \InvalidArgumentException('undefined format!');
        }
    }
}