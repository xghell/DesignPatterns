<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/5/18
 * Time: 5:34 PM
 */

namespace DesignPatterns\Creational\StaticFactory\Tests;


use DesignPatterns\Creational\StaticFactory\FormatNumber;
use DesignPatterns\Creational\StaticFactory\FormatString;
use DesignPatterns\Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class Tests extends TestCase
{
    public function testCanCreateFormatString()
    {
        $this->assertInstanceOf(FormatString::class, StaticFactory::build('string'));
    }

    public function testCanCreateFormatNumber()
    {
        $this->assertInstanceOf(FormatNumber::class, StaticFactory::build('number'));
    }

    public function testException()
    {
        try {
            StaticFactory::build('object');
        } catch(\Exception $exception) {
            $this->assertEquals('undefined format!', $exception->getMessage());
        }
    }
}