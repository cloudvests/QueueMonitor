<?php

namespace elsayed85\QueueMonitor\Controllers;

use Illuminate\Http\Request;
use elsayed85\QueueMonitor\Models\Monitor;

class DeleteMonitorController
{
    public function __invoke(Request $request, Monitor $monitor)
    {
        $monitor->delete();

        return redirect()->route('queue-monitor::index');
    }
}
