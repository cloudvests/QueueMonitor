<?php

namespace cloudvests\QueueMonitor\Controllers\Payloads;

final class Metrics
{
    /**
     * @var \cloudvests\QueueMonitor\Controllers\Payloads\Metric[]
     */
    public $metrics = [];

    /**
     * @return \cloudvests\QueueMonitor\Controllers\Payloads\Metric[]
     */
    public function all(): array
    {
        return $this->metrics;
    }

    public function push(Metric $metric): self
    {
        $this->metrics[] = $metric;

        return $this;
    }
}
