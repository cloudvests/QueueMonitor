<?php

namespace cloudvests\QueueMonitor\Controllers;

use Illuminate\Http\Request;
use cloudvests\QueueMonitor\Models\Monitor;

class DeleteMonitorController
{
    public function __invoke(Request $request, Monitor $monitor)
    {
        $monitor->delete();

        return redirect()->route('queue-monitor::index');
    }
}
