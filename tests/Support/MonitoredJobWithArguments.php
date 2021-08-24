<?php

namespace cloudvests\QueueMonitor\Tests\Support;

use cloudvests\QueueMonitor\Traits\IsMonitored;

class MonitoredJobWithArguments extends BaseJob
{
    use IsMonitored;

    public $first;

    public function __construct(string $first)
    {
        $this->first = $first;
    }
}
