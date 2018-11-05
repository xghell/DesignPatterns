<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/5/18
 * Time: 7:25 PM
 */

namespace DesignPatterns\Creational\Pool;


class WorkerPool implements \Countable
{
    private $maxWorkerCount = 0;
    private $freeWorker = [];
    private $occupiedWorker = [];

    public function __construct($maxWorkerCount = 3)
    {
        $this->maxWorkerCount = $maxWorkerCount;
    }

    public function getWorker()
    {
        if (0 === count($this->freeWorker)) {
            $worker = new Worker();
            if (count($this) < $this->maxWorkerCount) {
                $this->occupiedWorker[spl_object_id($worker)] = $worker;
            }
            return $worker;
        } else {
            $worker = array_pop($this->freeWorker);
            $workerIdentifier = spl_object_id($worker);
            $this->occupiedWorker[$workerIdentifier] = $worker;
            return $worker;
        }
    }

    public function disposeWorker(Worker $worker)
    {
        $workerIdentifier = spl_object_id($worker);
        if (isset($this->occupiedWorker[$workerIdentifier])) {
            $this->freeWorker[$workerIdentifier] = $worker;
            unset($this->occupiedWorker[$workerIdentifier]);
        } else {
            unset($worker);
        }
    }

    public function count()
    {
        return count($this->freeWorker) + count($this->occupiedWorker);
    }

    public function __get($name)
    {
        return $this->$name;
    }
}