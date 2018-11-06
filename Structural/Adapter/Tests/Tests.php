<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/6/18
 * Time: 12:31 PM
 */

namespace DesignPatterns\Structural\Adapter\Tests;


use DesignPatterns\Structural\Adapter\Adapter\MysqlAdapter;
use DesignPatterns\Structural\Adapter\Mysql;
use DesignPatterns\Structural\Adapter\Sqlite;
use DesignPatterns\Structural\Adapter\Adapter\SqliteAdapter;
use PHPUnit\Framework\TestCase;

class Tests extends TestCase
{
    public function testCanUseMysqlAdapter()
    {
        $mysql = new Mysql();
        $mysql_adapter = new MysqlAdapter($mysql);
        $this->assertEquals('this is Mysql insert!', $mysql_adapter->insert());
        $this->assertEquals('this is Mysql delete!', $mysql_adapter->delete());
        $this->assertEquals('this is Mysql update!', $mysql_adapter->update());
        $this->assertEquals('this is Mysql select!', $mysql_adapter->select());
    }

    public function testCanUseSqliteAdapter()
    {
        $sqlite = new Sqlite();
        $sqlite_adapter = new SqliteAdapter($sqlite);
        $this->assertEquals('this is Sqlite insert!', $sqlite_adapter->insert());
        $this->assertEquals('this is Sqlite delete!', $sqlite_adapter->delete());
        $this->assertEquals('this is Sqlite update!', $sqlite_adapter->update());
        $this->assertEquals('this is Sqlite select!', $sqlite_adapter->select());
    }
}