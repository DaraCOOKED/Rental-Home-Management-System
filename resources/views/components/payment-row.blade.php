@props(['name', 'property', 'amount', 'status' => 'Paid'])

@php
$statusClass = match($status) {
    'Paid'    => 'text-green-600 bg-green-100',
    'Pending' => 'text-yellow-600 bg-yellow-100',
    'Overdue' => 'text-red-500 bg-red-100',
    default   => 'text-gray-600 bg-gray-100',
};
@endphp

<div class="bg-gray-50 rounded-xl flex items-center p-2.5 justify-between">
    <div>
        <p class="text-sm font-semibold text-gray-900">{{ $name }}</p>
        <p class="text-xs text-gray-400 ">{{ $property }}</p>
    </div>
    <div class="text-right">
        <p class="text-sm font-bold text-gray-900">${{ $amount }}</p>
        <span class="text-xs font-medium px-2 rounded-md {{ $statusClass }}">{{ $status }}</span>
    </div>
</div>