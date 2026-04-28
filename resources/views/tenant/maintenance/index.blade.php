@extends('layouts.app')
@section('title', 'Maintenance Requests')
@section('content')

<div class="bg-gray-50 p-6 font-sans">

    {{-- Header --}}
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-semibold text-gray-800">Maintenance Requests</h1>
            <p class="text-gray-500 text-sm">Submit and track your maintenance requests</p>
        </div>
        <a href="{{ route('tenant.maintenance.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center gap-2 !no-underline">
            + New Request
        </a>
    </div>

    {{-- Stats --}}
    <div class="grid grid-cols-4 gap-3 mb-6">
        <x-summary-card label="Total Requests" :value="$requests->count()"                                        valueColor="text-gray-900" />
        <x-summary-card label="In Progress"    :value="$requests->where('status_request', 'in_progress')->count()" valueColor="text-blue-500" />
        <x-summary-card label="Completed"      :value="$requests->where('status_request', 'completed')->count()"   valueColor="text-green-500" />
        <x-summary-card label="Pending"        :value="$requests->where('status_request', 'pending')->count()"     valueColor="text-yellow-500" />
    </div>

    {{-- Requests List --}}
    <div class="bg-white rounded-2xl border border-gray-100 p-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-base font-semibold text-gray-900">Your Requests</h3>
            <select id="statusFilter" class="px-3 py-1.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-blue-100">
                <option value="">All Status</option>
                <option value="pending">Pending</option>
                <option value="in_progress">In Progress</option>
                <option value="completed">Completed</option>
            </select>
        </div>

        <div class="divide-y divide-gray-100" id="requestList">
            @forelse($requests as $request)
            @php
                $statusConfig = match(strtolower($request->status_request)) {
                    'in_progress' => ['label' => 'In Progress', 'class' => 'bg-blue-100 text-blue-600', 'icon' => '🕐'],
                    'completed'   => ['label' => 'Completed',   'class' => 'bg-green-100 text-green-600', 'icon' => '✓'],
                    'pending'     => ['label' => 'Pending',     'class' => 'bg-yellow-100 text-yellow-600', 'icon' => '⏳'],
                    default       => ['label' => ucfirst($request->status_request), 'class' => 'bg-gray-100 text-gray-600', 'icon' => '•'],
                };
                $priorityConfig = match(strtolower($request->priority ?? 'medium')) {
                    'high'   => ['label' => 'High',   'class' => 'bg-red-100 text-red-600'],
                    'medium' => ['label' => 'Medium', 'class' => 'bg-yellow-100 text-yellow-700'],
                    'low'    => ['label' => 'Low',    'class' => 'bg-green-100 text-green-600'],
                    default  => ['label' => 'Medium', 'class' => 'bg-yellow-100 text-yellow-700'],
                };
            @endphp
            <div class="py-4 request-item" data-status="{{ $request->status_request }}">
                <div class="flex items-start justify-between gap-3">
                    <div class="flex-1">
                        <div class="flex items-center gap-2 flex-wrap">
                            <h4 class="text-sm font-semibold text-gray-900">{{ $request->title }}</h4>
                            <span class="text-xs font-medium px-2.5 py-0.5 rounded-full {{ $statusConfig['class'] }}">
                                {{ $statusConfig['label'] }}
                            </span>
                            <span class="text-xs font-medium px-2.5 py-0.5 rounded-full {{ $priorityConfig['class'] }}">
                                {{ $priorityConfig['label'] }}
                            </span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">{{ $request->description }}</p>
                        <div class="flex flex-wrap gap-x-4 mt-2 text-xs text-gray-400">
                            @if($request->assigned_to)
                                <span>Assigned to: {{ $request->assigned_to }}</span>
                            @endif
                            @if($request->submitted_date)
                                <span>Submitted: {{ $request->submitted_date }}</span>
                            @endif
                            @if($request->est_completion)
                                <span>Est. completion: {{ $request->est_completion }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="text-center py-10">
                <p class="text-gray-400 text-sm">No maintenance requests yet.</p>
                <a href="{{ route('tenant.maintenance.create') }}" class="text-blue-500 text-sm mt-2 inline-block">+ Submit your first request</a>
            </div>
            @endforelse
        </div>
    </div>

</div>

@push('scripts')
<script>
    const filter = document.getElementById('statusFilter');
    filter.addEventListener('change', function() {
        const val = this.value;
        document.querySelectorAll('.request-item').forEach(item => {
            if (!val || item.dataset.status === val) {
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
            }
        });
    });
</script>
@endpush

@endsection