@extends('layouts.app')
@section('title', 'Add Tenant')
@section('content')

<div class="bg-gray-50 p-6 font-sans">
    <div class="mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Add New Tenant</h1>
        <p class="text-gray-500 text-sm">Create tenant account for portal access</p>
    </div>

    <form action="{{ route('admin.tenants.store') }}" method="POST" class="bg-white rounded-2xl border border-gray-100 p-6">
        @csrf

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="text-sm text-gray-600">Full Name</label>
                <input type="text" name="name" class="w-full mt-1 px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100" required />
            </div>

            <div>
                <label class="text-sm text-gray-600">Email</label>
                <input type="email" name="email" class="w-full mt-1 px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100" required />
            </div>

            <div>
                <label class="text-sm text-gray-600">Password</label>
                <input type="password" name="password" class="w-full mt-1 px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100" required />
            </div>
        </div>

        <div class="flex gap-3 mt-6">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-xl text-sm hover:bg-blue-700">Create Tenant</button>
            <a href="{{ route('admin.tenants.index') }}" class="px-6 py-2 rounded-xl border border-gray-200 text-sm text-gray-600 hover:bg-gray-50 !no-underline">Cancel</a>
        </div>
    </form>
</div>

@endsection