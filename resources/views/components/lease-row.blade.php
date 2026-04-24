@props(['name', 'property', 'ends', 'status' => 'Expiring Soon'])

@php
$statusClass = match($status) {
    'Expiring Soon'   => 'text-orange-500 bg-orange-100',
    'Renewal Pending' => 'text-blue-500 bg-blue-100',
    'Active'          => 'text-green-600 bg-green-100',
    default           => 'text-gray-600 bg-gray-100',
};
@endphp

<div class="bg-gray-50 rounded-xl px-5 py-3 flex items-center justify-between">
    <div>
        <p class="text-sm font-semibold text-gray-900">{{ $name }}</p>
        <p class="text-xs text-gray-400 mt-0.5">{{ $property }}</p>
    </div>
    <div class="text-right">
        <p class="text-xs text-gray-400 mb-1">Ends: {{ $ends }}</p>
        <span class="text-xs font-medium px-2 py-0.5 rounded-md {{ $statusClass }}">{{ $status }}</span>
    </div>
</div>