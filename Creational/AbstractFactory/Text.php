<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/4/18
 * Time: 3:08 AM
 */

namespace DesignPatterns\Creational\AbstractFactory;


abstract class Text
{
    protected $text = '';
    public function __construct(string $text)
    {
        $this->text = $text;
    }
}