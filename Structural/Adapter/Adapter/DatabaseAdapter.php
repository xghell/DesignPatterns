<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/6/18
 * Time: 11:45 AM
 */

namespace DesignPatterns\Structural\Adapter\Adapter;


interface DatabaseAdapter
{
    public function insert();
    public function update();
    public function delete();
    public function select();
}