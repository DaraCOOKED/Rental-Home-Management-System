@extends('layouts.app')
@section('title', 'New Maintenance Request')
@section('content')

<div class="bg-gray-50 p-6 font-sans">

    <div class="mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">New Maintenance Request</h1>
        <p class="text-gray-500 text-sm">Fill in the details to submit your request</p>
    </div>

    <form action="{{ route('tenant.maintenance.store') }}" method="POST" class="bg-white rounded-2xl border border-gray-100 p-6">
        @csrf

        <div class="grid grid-cols-2 gap-4">

            <div>
                <label class="text-sm text-gray-600">Title</label>
                <input type="text" name="title" placeholder="e.g. Leaking faucet" class="w-full mt-1 px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100" required />
            </div>

            <div>
                <label class="text-sm text-gray-600">Email</label>
                <input type="email" name="Email" value="{{ auth()->user()->email }}" class="w-full mt-1 px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100" required />
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
                <label class="text-sm text-gray-600">Submitted Date</label>
                <input type="date" name="submitted_date" value="{{ date('Y-m-d') }}" class="w-full mt-1 px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100" />
            </div>

            <div class="col-span-2">
                <label class="text-sm text-gray-600">Description</label>
                <textarea name="description" rows="4" placeholder="Describe the issue in detail..." class="w-full mt-1 px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100" required></textarea>
            </div>

        </div>

        <div class="flex gap-3 mt-6">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-xl text-sm hover:bg-blue-700">Submit Request</button>
            <a href="{{ route('tenant.maintenance.index') }}" class="px-6 py-2 rounded-xl border border-gray-200 text-sm text-gray-600 hover:bg-gray-50 !no-underline">Cancel</a>
        </div>

    </form>
</div>

@endsection