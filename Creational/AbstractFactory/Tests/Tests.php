<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/4/18
 * Time: 3:21 AM
 */

namespace DesignPatterns\Creational\AbstractFactory\Tests;

use DesignPatterns\Creational\AbstractFactory\TextFactory;
use DesignPatterns\Creational\AbstractFactory\HtmlText;
use DesignPatterns\Creational\AbstractFactory\JsonText;
use PHPUnit\Framework\TestCase;

class Tests extends TestCase
{
    public function testCanCreateHtmlFactory()
    {
        $factory = new TextFactory();
        $text = $factory->createHtmlText('test');
        $this->assertInstanceOf(HtmlText::class, $text);
    }

    public function testCanCreateJsonFactory()
    {
        $factory = new TextFactory();
        $text = $factory->createJsonText('test');
        $this->assertInstanceOf(JsonText::class, $text);
    }
}