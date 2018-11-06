<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/6/18
 * Time: 11:52 AM
 */

namespace DesignPatterns\Structural\Adapter;


class Sqlite
{
    public function add()
    {
        return 'this is Sqlite insert!';
    }

    public function dispose()
    {
        return 'this is Sqlite delete!';
    }

    public function modify()
    {
        return 'this is Sqlite update!';
    }

    public function search()
    {
        return 'this is Sqlite select!';
    }
}