@extends('layouts.app')
@section('title', 'New Maintenance Request')
@section('content')

<div class="bg-gray-50 p-6 font-sans">

    <div class="mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">New Maintenance Request</h1>
        <p class="text-gray-500 text-sm">Fill in the details below to submit a new request</p>
    </div>

    <form action="{{ route('maintenance.store') }}" method="POST" class="bg-white rounded-2xl border border-gray-100 p-6">
        @csrf

        <div class="grid grid-cols-2 gap-4">

            <div>
                <label class="text-sm text-gray-600">Title</label>
                <input type="text" name="title" class="w-full mt-1 px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100" required />
            </div>

            <div>
                <label class="text-sm text-gray-600">Email</label>
                <input type="email" name="Email" class="w-full mt-1 px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100" required />
            </div>

            <div>
                <label class="text-sm text-gray-600">Unit ID</label>
                <input type="number" name="unit_id" class="w-full mt-1 px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100" required />
            </div>

            <div>
                <label class="text-sm text-gray-600">Tenant ID</label>
                <input type="number" name="tenat_id" class="w-full mt-1 px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100" required />
            </div>

            <div>
                <label class="text-sm text-gray-600">Status</label>
                <select name="status_request" class="w-full mt-1 px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100">
                    <option value="pending">Pending</option>
                    <option value="in_progress">In Progress</option>
                    <option value="completed">Completed</option>
                </select>
            </div>

            <div>
                <label class="text-sm text-gray-600">Priority</label>
                <select name="priority" class="w-full mt-1 px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100">
                    <option value="low">Low</option>
                    <option value="medium" selected>Medium</option>
                    <option value="high">High</option>
                </select>
            </div>

            <div>
                <label class="text-sm text-gray-600">Assigned To</label>
                <input type="text" name="assigned_to" placeholder="e.g. Mike's Plumbing" class="w-full mt-1 px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100" />
            </div>

            <div>
                <label class="text-sm text-gray-600">Submitted Date</label>
                <input type="date" name="submitted_date" class="w-full mt-1 px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100" />
            </div>

            <div>
                <label class="text-sm text-gray-600">Est. Completion</label>
                <input type="date" name="est_completion" class="w-full mt-1 px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100" />
            </div>

            <div>
                <label class="text-sm text-gray-600">Description</label>
                <textarea name="description" rows="3" class="w-full mt-1 px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100" required></textarea>
            </div>

        </div>

        <div class="flex gap-3 mt-6">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-xl text-sm hover:bg-blue-700">Submit</button>
            <a href="{{ route('maintenance.index') }}" class="px-6 py-2 rounded-xl border border-gray-200 text-sm text-gray-600 hover:bg-gray-50">Cancel</a>
        </div>

    </form>
</div>

@endsection