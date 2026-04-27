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

    public function store(Request $request)
    {
        $request->validate([
            'unit_id'        => 'required',
            'tenat_id'       => 'required',
            'Email'          => 'required|email',
            'title'          => 'required|string',
            'status_request' => 'required|string',
            'description'    => 'required|string',
        ]);

        Maintenance::create($request->all());

        return redirect()->route('maintenance.index')->with('success', 'Request created!');
    }
}