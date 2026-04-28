<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Illuminate\Http\Request;

class TenantMaintenanceController extends Controller
{
    public function index()
    {
        $requests = Maintenance::where('Email', auth()->user()->email)->get();
        return view('tenant.maintenance.index', compact('requests'));
    }

    public function create()
    {
        return view('tenant.maintenance.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'          => 'required|string',
            'Email'          => 'required|email',
            'description'    => 'required|string',
            'priority'       => 'required|string',
            'submitted_date' => 'nullable|date',
        ]);

        Maintenance::create([
            'title'          => $request->title,
            'Email'          => $request->Email,
            'description'    => $request->description,
            'priority'       => $request->priority,
            'submitted_date' => $request->submitted_date,
            'status_request' => 'pending',
            'unit_id'        => 0,
            'tenat_id'       => auth()->id(),
        ]);

        return redirect()->route('tenant.maintenance.index')->with('success', 'Request submitted successfully!');
    }
}