<?php

namespace cloudvests\QueueMonitor\Tests\Support;

use cloudvests\QueueMonitor\Traits\IsMonitored;

class MonitoredPartiallyKeptJob extends BaseJob
{
    use IsMonitored;

    public static function keepMonitorOnSuccess(): bool
    {
        return false;
    }
}
