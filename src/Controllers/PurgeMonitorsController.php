<?php

namespace cloudvests\QueueMonitor\Controllers;

use Illuminate\Http\Request;
use cloudvests\QueueMonitor\Models\Contracts\MonitorContract;
use cloudvests\QueueMonitor\Services\QueueMonitor;

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
