<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function index()
    {
        $maintenanceRequests = Maintenance::all();
        return view('admin.maintenance.index', compact('maintenanceRequests'));
    }
    public function create()
    {
        return view('admin.maintenance.create');
    }

        public function approve($id)
    {
        Maintenance::findOrFail($id)->update(['status_request' => 'in_progress']);
        return back()->with('success', 'Request approved!');
    }

    public function reject($id)
    {
        Maintenance::findOrFail($id)->update(['status_request' => 'rejected']);
        return back()->with('success', 'Request rejected!');
    }

    public function complete($id)
    {
        Maintenance::findOrFail($id)->update(['status_request' => 'completed']);
        return back()->with('success', 'Request completed!');
    }

    
}