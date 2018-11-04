<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/4/18
 * Time: 3:07 AM
 */

namespace DesignPatterns\Creational\AbstractFactory;

class TextFactory
{
    public function createHtmlText(string $text): Text
    {
        return new HtmlText($text);
    }

    public function createJsonText(string $text): Text
    {
        return new JsonText($text);
    }
}