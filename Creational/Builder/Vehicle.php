<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/5/18
 * Time: 3:53 PM
 */

namespace DesignPatterns\Creational\Builder;


abstract class Vehicle
{
    protected $trunk;
    protected $wheels = [];
    protected $doors = [];
    abstract public function addTrunk($trunk);
    abstract public function addWheels($wheels);
    abstract public function addDoors($doors);
}