<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/6/18
 * Time: 11:47 AM
 */

namespace DesignPatterns\Structural\Adapter\Adapter;


use DesignPatterns\Structural\Adapter\Mysql;

class MysqlAdapter implements DatabaseAdapter
{
    protected $mysql;

    public function __construct(Mysql $mysql)
    {
        return $this->mysql = $mysql;
    }

    public function insert()
    {
        return $this->mysql->exec('insert');
    }

    public function update()
    {
        return $this->mysql->exec('update');
    }

    public function delete()
    {
        return $this->mysql->exec('delete');
    }

    public function select()
    {
        return $this->mysql->exec('select');
    }
}