<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/7/18
 * Time: 5:26 PM
 */

namespace DesignPatterns\Structural\Facade;


interface BiosInterface
{
    public function execute();
    public function waiteForKeyPress();
    public function launch();
    public function powerDown();
}