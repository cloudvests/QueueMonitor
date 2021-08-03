<?php

namespace elsayed85\QueueMonitor\Controllers\Payloads;

final class Metrics
{
    /**
     * @var \elsayed85\QueueMonitor\Controllers\Payloads\Metric[]
     */
    public $metrics = [];

    /**
     * @return \elsayed85\QueueMonitor\Controllers\Payloads\Metric[]
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
