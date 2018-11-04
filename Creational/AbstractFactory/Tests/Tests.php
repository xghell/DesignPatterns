<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/4/18
 * Time: 3:21 AM
 */

namespace DesignPatterns\Creational\AbstractFactory\Tests;

use DesignPatterns\Creational\AbstractFactory\HtmlFactory;
use DesignPatterns\Creational\AbstractFactory\HtmlText;
use DesignPatterns\Creational\AbstractFactory\JsonFactory;
use DesignPatterns\Creational\AbstractFactory\JsonText;
use PHPUnit\Framework\TestCase;

class Tests extends TestCase
{
    public function testCanCreateHtmlFactory()
    {
        $factory = new HtmlFactory();
        $text = $factory->createText('test');
        $this->assertInstanceOf(HtmlText::class, $text);
    }

    public function testCanCreateJsonFactory()
    {
        $factory = new JsonFactory();
        $text = $factory->createText('test');
        $this->assertInstanceOf(JsonText::class, $text);
    }
}