@extends('layouts.app')
@section('title', 'Tenants')
@section('content')

<div class="bg-gray-50 p-6 font-sans">

    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-semibold text-gray-800">Tenants</h1>
            <p class="text-gray-500 text-sm">Manage tenant information and profiles</p>
        </div>
        <a href="{{ route('admin.tenants.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 !no-underline flex items-center gap-2">
            + Add Tenant
        </a>
    </div>

    <div class="grid grid-cols-4 gap-3 mb-6">
        <x-summary-card label="Total Tenants" :value="$tenants->count()" valueColor="text-gray-900" />
        <x-summary-card label="Up to Date"    value="0" valueColor="text-green-500" />
        <x-summary-card label="Pending"       value="0" valueColor="text-yellow-500" />
        <x-summary-card label="Overdue"       value="0" valueColor="text-red-500" />
    </div>

    <div class="bg-white rounded-2xl border border-gray-100 px-4 py-3 mb-4 flex items-center gap-2">
        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z"/>
        </svg>
        <input type="text" id="searchInput" placeholder="Search tenants by name, email, or property..."
            class="w-full text-sm focus:outline-none bg-transparent" />
    </div>

    <div class="bg-white rounded-2xl border border-gray-100 overflow-hidden">
        <table class="w-full text-sm">
            <thead class="border-b border-gray-100">
                <tr>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-gray-400 uppercase">Tenant</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-gray-400 uppercase">Contact</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-gray-400 uppercase">Property</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-gray-400 uppercase">Lease Period</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-gray-400 uppercase">Rent</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-gray-400 uppercase">Payment Status</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-gray-400 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100" id="tenantList">
                @forelse($tenants as $tenant)
                <tr class="hover:bg-gray-50 tenant-row" data-name="{{ strtolower($tenant->name) }}" data-email="{{ strtolower($tenant->email) }}">

                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">{{ $tenant->name }}</p>
                                <span class="text-xs text-green-500 font-medium">● Active</span>
                            </div>
                        </div>
                    </td>

                    <td class="px-6 py-4">
                        <div class="flex flex-col gap-1 text-gray-500 text-xs">
                            <span>✉ {{ $tenant->email }}</span>
                            <span>📞 {{ $tenant->phone }}</span>
                        </div>
                    </td>

                    <td class="px-6 py-4 text-gray-500 text-xs">N/A</td>
                    <td class="px-6 py-4 text-gray-500 text-xs">N/A</td>
                    <td class="px-6 py-4 text-gray-900 font-medium text-xs">N/A</td>

                    <td class="px-6 py-4">
                        <span class="text-xs font-medium px-2.5 py-1 rounded-full bg-green-100 text-green-600">Up to Date</span>
                    </td>

                    <td class="px-6 py-4">
                        <a href="#" class="text-sm text-blue-500 font-medium !no-underline hover:text-blue-700">View Details</a>
                    </td>

                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-6 py-10 text-center text-gray-400">No tenants found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

@push('scripts')
<script>
    document.getElementById('searchInput').addEventListener('input', function() {
        const val = this.value.toLowerCase();
        document.querySelectorAll('.tenant-row').forEach(row => {
            const name  = row.dataset.name;
            const email = row.dataset.email;
            row.classList.toggle('hidden', !name.includes(val) && !email.includes(val));
        });
    });
</script>
@endpush

@endsection