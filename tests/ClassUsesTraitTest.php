<?php

namespace elsayed85\QueueMonitor\Tests;

use elsayed85\QueueMonitor\Services\ClassUses;
use elsayed85\QueueMonitor\Tests\Support\MonitoredExtendingJob;
use elsayed85\QueueMonitor\Tests\Support\MonitoredJob;
use elsayed85\QueueMonitor\Traits\IsMonitored;

class ClassUsesTraitTest extends TestCase
{
    public function testUsingMonitorTrait()
    {
        $this->assertArrayHasKey(
            IsMonitored::class,
            ClassUses::classUsesRecursive(MonitoredJob::class)
        );
    }

    public function testUsingMonitorTraitExtended()
    {
        $this->assertArrayHasKey(
            IsMonitored::class,
            ClassUses::classUsesRecursive(MonitoredExtendingJob::class)
        );
    }
}
