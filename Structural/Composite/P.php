<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/6/18
 * Time: 3:07 PM
 */

namespace DesignPatterns\Structural\Composite;


class P extends Element
{
    protected $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render()
    {
        return '<p>' . $this->text . '<p/>';
    }
}