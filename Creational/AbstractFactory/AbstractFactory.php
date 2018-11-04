<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/4/18
 * Time: 3:07 AM
 */

namespace DesignPatterns\Creational\AbstractFactory;


abstract class AbstractFactory
{
    abstract public function createText(string $text): Text;
}