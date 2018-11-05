<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/5/18
 * Time: 4:08 PM
 */

namespace DesignPatterns\Creational\Builder;


class CarBuilder implements VehicleBuilder
{
    public function build($car, $trunk, $wheels, $doors)
    {
        $car->addTrunk($trunk);
        $car->addWheels($wheels);
        $car->addDoors($doors);
        return $car;
    }
}