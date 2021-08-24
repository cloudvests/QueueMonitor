<?php

namespace cloudvests\QueueMonitor\Tests;

use cloudvests\QueueMonitor\Services\ClassUses;
use cloudvests\QueueMonitor\Tests\Support\MonitoredExtendingJob;
use cloudvests\QueueMonitor\Tests\Support\MonitoredJob;
use cloudvests\QueueMonitor\Traits\IsMonitored;

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
