<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/6/18
 * Time: 11:47 AM
 */

namespace DesignPatterns\Structural\Adapter\Adapter;


use DesignPatterns\Structural\Adapter\Sqlite;

class SqliteAdapter implements DatabaseAdapter
{
    protected $sqlite;

    public function __construct(Sqlite $sqlite)
    {
        return $this->sqlite = $sqlite;
    }

    public function insert()
    {
        return $this->sqlite->add();
    }

    public function update()
    {
        return $this->sqlite->modify();
    }

    public function delete()
    {
        return $this->sqlite->dispose();
    }

    public function select()
    {
        return $this->sqlite->search();
    }
}