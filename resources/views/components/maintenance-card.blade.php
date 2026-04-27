@props(['title', 'property', 'priority', 'date', 'iconBg' => 'bg-blue-50'])

@php
    $priorityClass = match($priority) {
        'High'   => 'text-red-500 bg-red-100',
        'Medium' => 'text-yellow-600 bg-yellow-100',
        'Low'    => 'text-green-600 bg-green-100',
        default  => 'text-gray-600 bg-gray-100',
    };
@endphp

<div class="flex items-center gap-3 p-3 rounded-xl hover:bg-gray-50">
    <div class="w-9 h-9 rounded-xl flex items-center justify-center {{ $iconBg }}">
        {{ $icon }}
    </div>
    <div class="flex-1">
        <p class="text-sm font-semibold text-gray-900">{{ $title }}</p>
        <p class="text-xs text-gray-400">{{ $property }}</p>
    </div>
    <div class="text-right">
        <span class="text-xs font-medium px-2 py-1 rounded-full {{ $priorityClass }}">{{ $priority }}</span>
        <p class="text-xs text-gray-400 mt-1">{{ $date }}</p>
    </div>
</div>