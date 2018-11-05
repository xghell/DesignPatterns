<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/5/18
 * Time: 7:46 PM
 */

namespace DesignPatterns\Creational\Pool\Tests;


use DesignPatterns\Creational\Pool\Worker;
use DesignPatterns\Creational\Pool\WorkerPool;
use PHPUnit\Framework\TestCase;

class Tests extends TestCase
{
    public function testGetWorker()
    {
        $worker = (new WorkerPool())->getWorker();
        $this->assertInstanceOf(Worker::class, $worker, 'failed to get worker');
    }

    public function testDisposeWorker()
    {
        $worker_pool = new WorkerPool();
        $worker = $worker_pool->getWorker();
        $this->assertArrayHasKey(spl_object_id($worker), $worker_pool->occupiedWorker);
        $worker_pool->disposeWorker($worker);
        $this->assertArrayHasKey(spl_object_id($worker), $worker_pool->freeWorker);
    }

    public function testCanGetNewWorkerWhenGetTwice()
    {
        $worker_pool = new WorkerPool();
        $worker1 = $worker_pool->getWorker();
        $worker2 = $worker_pool->getWorker();
        $this->assertNotSame($worker1, $worker2);
    }

    public function testCanGetSameWorkerAfterDisposeWorker()
    {
        $worker_pool = new WorkerPool();
        $worker1 = $worker_pool->getWorker();
        $worker_pool->disposeWorker($worker1);
        $worker2 = $worker_pool->getWorker();
        $this->assertSame($worker1, $worker2);
    }

    public function testMaxWorkerCount()
    {
        $worker_pool = new WorkerPool(4);
        for($i=0; $i<10; ++$i) {
            $worker_pool->getWorker();
        }
        $this->assertEquals(4, count($worker_pool));
    }
}