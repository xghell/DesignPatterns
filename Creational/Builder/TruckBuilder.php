<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/5/18
 * Time: 4:09 PM
 */

namespace DesignPatterns\Creational\Builder;


class TruckBuilder implements VehicleBuilder
{
    public function build($truck, $trunk, $wheels, $doors)
    {
        $truck->addTrunk($trunk);
        $truck->addWheels($wheels);
        $truck->addDoors($doors);
        return $truck;
    }
}