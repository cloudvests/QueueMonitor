<?php

namespace elsayed85\QueueMonitor\Tests\Support;

use elsayed85\QueueMonitor\Traits\IsMonitored;

class MonitoredPartiallyKeptJob extends BaseJob
{
    use IsMonitored;

    public static function keepMonitorOnSuccess(): bool
    {
        return false;
    }
}
