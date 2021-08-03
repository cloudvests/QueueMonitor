<?php

namespace elsayed85\QueueMonitor\Controllers;

use Illuminate\Http\Request;
use elsayed85\QueueMonitor\Models\Contracts\MonitorContract;
use elsayed85\QueueMonitor\Services\QueueMonitor;

class PurgeMonitorsController
{
    public function __invoke(Request $request)
    {
        $model = QueueMonitor::getModel();

        $model->newQuery()->each(function (MonitorContract $monitor) {
            $monitor->delete();
        }, 200);

        return redirect()->route('queue-monitor::index');
    }
}
