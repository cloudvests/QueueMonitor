<?php

namespace cloudvests\QueueMonitor\Tests\Support;

use cloudvests\QueueMonitor\Traits\IsMonitored;

class MonitoredJob extends BaseJob
{
    use IsMonitored;
}
