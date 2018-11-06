<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/6/18
 * Time: 5:09 PM
 */

namespace DesignPatterns\Structural\DataMapper;


class DatabaseAdapter
{
    public function findTableByModel(string $model_name)
    {
        $function = 'get' . $model_name . 'Table';
        return Database::$function();
    }
}