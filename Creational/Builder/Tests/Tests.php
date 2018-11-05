<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/5/18
 * Time: 4:51 PM
 */

namespace DesignPatterns\Creational\Builder\Tests;


use DesignPatterns\Creational\Builder\Car;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Trunk;
use DesignPatterns\Creational\Builder\Parts\Wheel;
use DesignPatterns\Creational\Builder\Truck;
use DesignPatterns\Creational\Builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

class Tests extends TestCase
{
    public function testCanBuildCar()
    {
        $car = new Car();
        $trunk = new Trunk();
        $wheels = [
            'front' => new Wheel(),
            'back' => new Wheel()
        ];
        $doors = [
            'left' => new Door(),
            'right' => new Door()
        ];
        $car_builder = new CarBuilder();
        $product = $car_builder->build($car, $trunk, $wheels, $doors);
        $this->assertInstanceOf(Car::class, $product);
    }

    public function testCanBuildTruck()
    {
        $truck = new Truck();
        $trunk = new Trunk();
        $wheels = [
            'front' => new Wheel(),
            'back' => new Wheel()
        ];
        $doors = [
            'left' => new Door(),
            'right' => new Door()
        ];
        $car_builder = new TruckBuilder();
        $product = $car_builder->build($truck, $trunk, $wheels, $doors);
        $this->assertInstanceOf(Truck::class, $product);
    }
}