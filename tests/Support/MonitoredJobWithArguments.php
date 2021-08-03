<?php

namespace elsayed85\QueueMonitor\Tests\Support;

use elsayed85\QueueMonitor\Traits\IsMonitored;

class MonitoredJobWithArguments extends BaseJob
{
    use IsMonitored;

    public $first;

    public function __construct(string $first)
    {
        $this->first = $first;
    }
}
