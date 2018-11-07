<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/7/18
 * Time: 5:25 PM
 */

namespace DesignPatterns\Structural\Facade;


class Facade
{
    protected $os;
    protected $bios;

    public function __construct(OsInterface $os, BiosInterface $bios)
    {
        $this->bios = $bios;
        $this->os = $os;
    }

    public function turnOn()
    {
        $this->bios->waiteForKeyPress();
        $this->bios->execute();
        $this->bios->launch();
        return $this->os->getName();
    }

    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}