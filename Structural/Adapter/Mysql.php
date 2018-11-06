<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/6/18
 * Time: 11:52 AM
 */

namespace DesignPatterns\Structural\Adapter;


class Mysql
{
    public function exec($action)
    {
        switch ($action) {
            case 'insert':
                return 'this is Mysql insert!';
                break;
            case 'delete':
                return 'this is Mysql delete!';
                break;
            case 'update':
                return 'this is Mysql update!';
                break;
            case 'select':
                return 'this is Mysql select!';
                break;
            default:
                throw new \InvalidArgumentException('invalid argument!');
        }
    }
}