<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/5/18
 * Time: 4:00 PM
 */

namespace DesignPatterns\Creational\Builder;


class Car extends Vehicle
{
    public function addTrunk($trunk)
    {
        $this->trunk = $trunk;
    }

    public function addWheels($wheels)
    {
        $this->wheels = $wheels;
    }

    public function addDoors($doors)
    {
        $this->doors = $doors;
    }
}