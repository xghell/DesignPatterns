<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/4/18
 * Time: 3:10 AM
 */

namespace DesignPatterns\Creational\AbstractFactory;


class HtmlFactory extends AbstractFactory
{
    public function createText(string $text):Text
    {
        return new HtmlText($text);
    }
}