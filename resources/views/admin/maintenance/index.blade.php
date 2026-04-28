@extends('layouts.app')

@section('title', 'Maintenance')

@section('content')
<div class="bg-gray-50 p-6 font-sans">

    {{-- Header --}}
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-semibold text-gray-800">Maintenance Requests</h1>
            <p class="text-gray-500 text-sm">Track and manage property maintenance issues</p>
        </div>
    </div>

    {{-- Stats --}}
    <div class="grid grid-cols-4 gap-3 mb-4">
        <x-summary-card label="Total Requests"  :value="$maintenanceRequests->count()"                                          valueColor="text-gray-900" />
        <x-summary-card label="Pending"         :value="$maintenanceRequests->where('status_request', 'pending')->count()"      valueColor="text-yellow-500" />
        <x-summary-card label="In Progress"     :value="$maintenanceRequests->where('status_request', 'in_progress')->count()"  valueColor="text-blue-500" />
        <x-summary-card label="Completed"       :value="$maintenanceRequests->where('status_request', 'completed')->count()"    valueColor="text-green-500" />
    </div>

    {{-- Filters --}}
    <div class="bg-white rounded-2xl border border-gray-100 p-6 mb-4">
        <h3 class="text-sm font-semibold text-gray-700 mb-4">Filters</h3>
        <div class="grid grid-cols-2 gap-3">
            <input type="text" id="searchInput" placeholder="Search by title..."
                class="px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100" />
            <select id="statusFilter" class="px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100">
                <option value="">All Status</option>
                <option value="pending">Pending</option>
                <option value="in_progress">In Progress</option>
                <option value="completed">Completed</option>
            </select>
        </div>
    </div>
    {{-- Cards --}}
    <div class="space-y-3" id="cardList">
           @forelse($maintenanceRequests as $request)
    <x-maintenance-request-card
        :title="$request->title"
        :tenant="$request->Email"
        :description="$request->description"
        :status="$request->status_request"
        :email="$request->Email"
        :priority="$request->priority"
        :assignedTo="$request->assigned_to"
        :estCompletion="$request->est_completion"
        :submittedDate="$request->submitted_date"
        :requestId="$request->id"
        :isAdmin="true"
    />
@empty
    <p class="text-gray-500 text-sm text-center py-6">No maintenance requests found.</p>
@endforelse
    </div>

</div>
@endsection