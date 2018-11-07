<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/7/18
 * Time: 5:35 PM
 */

namespace DesignPatterns\Structural\Facade\Tests;


use DesignPatterns\Structural\Facade\BiosInterface;
use DesignPatterns\Structural\Facade\Facade;
use DesignPatterns\Structural\Facade\OsInterface;
use PHPUnit\Framework\TestCase;
use Prophecy\Prophet;

class Tests extends TestCase
{
    public function testComputeOn()
    {
        $prophet = new Prophet();
        $os = $prophet->prophesize(OsInterface::class);
        $bios = $prophet->prophesize(BiosInterface::class);
        $os->getName()->willReturn('Linux');
        $this->assertEquals('Linux', (new Facade($os->reveal(), $bios->reveal()))->turnOn());
    }
}