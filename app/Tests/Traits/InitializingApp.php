<?php

namespace Grocelivery\OrderTrackerTests\Traits;

use Laravel\Lumen\Application;

/**
 * Trait InitializingApp
 * @package Grocelivery\OrderTracker\Tests\Traits
 */
trait InitializingApp
{
    /** @var Application $app */
    protected $app;

    /**
     * @Given initialized application
     */
    public function initializedApplication()
    {
        $this->app = require __DIR__.'/../../../bootstrap/app.testing.php';
    }
}
