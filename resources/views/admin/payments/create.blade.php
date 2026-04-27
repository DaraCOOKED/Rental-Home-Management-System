@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class=" bg-gray-50 p-6 font-sans">

    {{-- Header --}}
    <div class="flex items-center justify-between mb-1">
    <div>
        <h1 class="text-2xl font-bold text-gray-900">Payments</h1>
        <p class="text-sm text-gray-500 mt-1">Track and manage rental payments</p>
    </div>
    <div class="flex items-center gap-3">
        <a href="#" style="text-decoration:none" class="flex items-center gap-2 px-4 py-2 rounded-xl border border-gray-200 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 transition">
            <x-heroicon-o-arrow-down-tray class="w-4 h-4" /> Export
        </a>
        <a href="/admin/payments/create" style="text-decoration:none" class="flex items-center gap-2 px-4 py-2 rounded-xl bg-blue-600 text-sm font-medium text-white hover:bg-blue-700 transition">
            <x-heroicon-o-plus class="w-4 h-4" /> Record Payment
        </a>
    </div>
</div>

    {{-- Stats Cards --}}
    <div class="grid grid-cols-4 gap-3 mb-4  ">
    <x-summary-card label="Total Received"  value="$11,650" valueColor="text-green-500" />
    <x-summary-card label="Pending"         value="$6,700"  valueColor="text-yellow-500" />
    <x-summary-card label="Overdue"         value="$2,100"  valueColor="text-red-500" />
    <x-summary-card label="Total Payments"  value="8"       valueColor="text-gray-900" />
</div>

{{-- Filters --}}
<div class="bg-white rounded-2xl border border-gray-100 p-6 mb-4">
    <div class="flex items-center gap-2 mb-4">
        <x-heroicon-o-funnel class="w-4 h-4 text-gray-500" />
        <h3 class="text-sm font-semibold text-gray-700">Filters</h3>
    </div>
    <div class="flex gap-3">
        <input
            type="text"
            id="searchInput"
            placeholder="Search by tenant or property..."
            class="w-full px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100"
        />
        <select id="statusFilter" class="px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100">
            <option value="">All Status</option>
            <option value="Paid">Paid</option>
            <option value="Pending">Pending</option>
            <option value="Overdue">Overdue</option>
        </select>
        <select id="monthFilter" class="px-4 py-2 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100">
            <option value="">All Months</option>
            <option value="01">January</option>
            <option value="02">February</option>
            <option value="03">March</option>
            <option value="04">April</option>
            <option value="05">May</option>
            <option value="06">June</option>
            <option value="07">July</option>
            <option value="08">August</option>
            <option value="09">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>
    </div>
</div>

{{-- Table --}}
<div class="bg-white rounded-2xl border border-gray-200 overflow-hidden">
    <table class="w-full text-sm" id="paymentsTable">
        <thead>
            <tr class="border-b border-gray-500 bg-gray-100">
                <th class="text-left px-6 py-4 text-xs font-semibold text-gray-400 uppercase tracking-widest">Tenant</th>
                <th class="text-left px-6 py-4 text-xs font-semibold text-gray-400 uppercase tracking-widest">Property</th>
                <th class="text-left px-6 py-4 text-xs font-semibold text-gray-400 uppercase tracking-widest">Amount</th>
                <th class="text-left px-6 py-4 text-xs font-semibold text-gray-400 uppercase tracking-widest">Due Date</th>
                <th class="text-left px-6 py-4 text-xs font-semibold text-gray-400 uppercase tracking-widest">Paid Date</th>
                <th class="text-left px-6 py-4 text-xs font-semibold text-gray-400 uppercase tracking-widest">Method</th>
                <th class="text-left px-6 py-4 text-xs font-semibold text-gray-400 uppercase tracking-widest">Status</th>
                <th class="text-left px-6 py-4 text-xs font-semibold text-gray-400 uppercase tracking-widest">Actions</th>
            </tr>
        </thead>
        <tbody id="paymentsBody">
            @php
            $payments = [
                ['tenant' => 'John Smith',    'property' => 'Sunset Villa #12',   'amount' => '2,500', 'due' => '2026-04-01', 'paid' => '2026-04-01', 'method' => 'Bank Transfer', 'status' => 'Paid'],
                ['tenant' => 'Sarah Johnson', 'property' => 'Oak Street Apt 5B',  'amount' => '1,800', 'due' => '2026-04-01', 'paid' => '2026-03-31', 'method' => 'Credit Card',   'status' => 'Paid'],
                ['tenant' => 'Michael Brown', 'property' => 'Park View #201',     'amount' => '3,200', 'due' => '2026-04-01', 'paid' => '-',          'method' => '-',             'status' => 'Pending'],
                ['tenant' => 'Emily Davis',   'property' => 'Riverside Condo 7A', 'amount' => '2,100', 'due' => '2026-03-28', 'paid' => '-',          'method' => '-',             'status' => 'Overdue'],
                ['tenant' => 'David Wilson',  'property' => 'Main Street House',  'amount' => '2,800', 'due' => '2026-04-01', 'paid' => '2026-03-29', 'method' => 'Check',         'status' => 'Paid'],
                ['tenant' => 'Lisa Anderson', 'property' => 'Garden Apt 3C',      'amount' => '1,950', 'due' => '2026-04-01', 'paid' => '2026-04-01', 'method' => 'Bank Transfer', 'status' => 'Paid'],
                ['tenant' => 'Robert Taylor', 'property' => 'Hill View #108',     'amount' => '2,600', 'due' => '2026-03-01', 'paid' => '2026-03-05', 'method' => 'Credit Card',   'status' => 'Paid'],
                ['tenant' => 'Jennifer White','property' => 'Downtown Loft 4D',   'amount' => '3,500', 'due' => '2026-04-01', 'paid' => '-',          'method' => '-',             'status' => 'Pending'],
            ];
            @endphp

            @foreach($payments as $p)
            @php
            $statusClass = match($p['status']) {
                'Paid'    => 'text-green-600 bg-green-100',
                'Pending' => 'text-yellow-500 bg-yellow-100',
                'Overdue' => 'text-red-500 bg-red-100',
                default   => 'text-gray-600 bg-gray-100',
            };
            @endphp
            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50 transition payment-row"
                data-tenant="{{ strtolower($p['tenant']) }}"
                data-property="{{ strtolower($p['property']) }}"
                data-status="{{ $p['status'] }}"
                data-month="{{ substr($p['due'], 5, 2) }}">
                <td class="px-6 py-4 font-semibold text-gray-900">{{ $p['tenant'] }}</td>
                <td class="px-6 py-4 text-gray-500">{{ $p['property'] }}</td>
                <td class="px-6 py-4 font-semibold text-gray-900">$ {{ $p['amount'] }}</td>
                <td class="px-6 py-4 text-gray-500">
                    <div class="flex items-center gap-2">
                        <x-heroicon-o-calendar-days class="w-4 h-4 text-gray-400" />
                        {{ $p['due'] }}
                    </div>
                </td>
                <td class="px-6 py-4 text-gray-500">{{ $p['paid'] }}</td>
                <td class="px-6 py-4 text-gray-500">{{ $p['method'] }}</td>
                <td class="px-6 py-4">
                    <span class="text-xs font-semibold px-3 py-1 rounded-full {{ $statusClass }}">{{ $p['status'] }}</span>
                </td>
                <td class="px-6 py-4">
                    @if($p['status'] !== 'Paid')
                        <a href="#" class="text-sm font-semibold text-blue-500 !no-underline hover:text-blue-700">Mark as Paid</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Empty State --}}
    <div id="emptyState" class="hidden text-center py-12">
        <x-heroicon-o-magnifying-glass class="w-10 h-10 mx-auto mb-3 text-gray-300" />
        <p class="text-sm text-gray-400">No payments found</p>
    </div>
</div>

@push('scripts')

{{-- JS Filter Logic --}}
<script>
    const search = document.getElementById('searchInput');
    const status = document.getElementById('statusFilter');
    const month  = document.getElementById('monthFilter');
    const rows   = document.querySelectorAll('.payment-row');
    const empty  = document.getElementById('emptyState');

    function filterTable() {
        const s  = search.value.toLowerCase();
        const st = status.value;
        const mo = month.value;
        let visible = 0;

        rows.forEach(row => {
            const matchSearch = row.dataset.tenant.includes(s) || row.dataset.property.includes(s);
            const matchStatus = !st || row.dataset.status === st;
            const matchMonth  = !mo || row.dataset.month === mo;

            if (matchSearch && matchStatus && matchMonth) {
                row.classList.remove('hidden');
                visible++;
            } else {
                row.classList.add('hidden');
            }
        });

        empty.classList.toggle('hidden', visible > 0);
    }

    search.addEventListener('input', filterTable);
    status.addEventListener('change', filterTable);
    month.addEventListener('change', filterTable);
</script>
@endpush


@endsection