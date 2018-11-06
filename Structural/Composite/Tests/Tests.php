<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/6/18
 * Time: 3:24 PM
 */

namespace DesignPatterns\Structural\Composite\Tests;


use DesignPatterns\Structural\Composite\A;
use DesignPatterns\Structural\Composite\HtmlRender;
use DesignPatterns\Structural\Composite\P;
use PHPUnit\Framework\TestCase;

class Tests extends TestCase
{
    public function testCanRenderHtml()
    {
        $html = new HtmlRender();
        $html->addElement('p', new P('this is p tag'));
        $html->addElement('a', new A('this is a tag'));
        $this->assertEquals('<p>this is p tag<p/><a>this is a tag<a/>', $html->render());
    }
}