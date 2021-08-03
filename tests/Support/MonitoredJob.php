<?php

namespace elsayed85\QueueMonitor\Tests\Support;

use elsayed85\QueueMonitor\Traits\IsMonitored;

class MonitoredJob extends BaseJob
{
    use IsMonitored;
}
