<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/4/18
 * Time: 4:30 AM
 */

require __DIR__ . '/autoload/Psr4AutoloadClass.php';

$loader = new \AutoLoad\Psr4AutoloadClass();
$loader->addNamespace('DesignPatterns', __DIR__);
$loader->register();