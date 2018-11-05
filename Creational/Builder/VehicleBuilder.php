<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/5/18
 * Time: 4:07 PM
 */

namespace DesignPatterns\Creational\Builder;


interface VehicleBuilder
{
    public function build($vehicle, $trunk, $wheels, $doors);
}