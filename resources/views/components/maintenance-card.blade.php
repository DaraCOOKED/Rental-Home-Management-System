@props(['title', 'property', 'priority' => 'Medium', 'date', 'iconBg' => 'bg-blue-50'])

@php
$priorityClass = match($priority) {
    'High'   => 'text-red-600 bg-red-100',
    'Medium' => 'text-yellow-600 bg-yellow-100',
    'Low'    => 'text-green-600 bg-green-100',
    default  => 'text-gray-600 bg-gray-100',
};
@endphp

<div class="flex items-center justify-between py-3 bg-gray-50 rounded-xl p-3 border-b border-gray-100 last:border-0">
    <div class="flex items-center gap-4">
        <div class="w-10 h-10 rounded-xl {{ $iconBg }} flex items-center justify-center shrink-0">
            {{ $icon }}
        </div>
        
    </div>
    <div class="text-right">
        <span class="text-xs font-medium px-2 py-0.5 rounded-md {{ $priorityClass }}">{{ $priority }}</span>
        <p class="text-xs text-gray-400 mt-1">{{ $date }}</p>
    </div>
    <div>
            <p class="text-sm font-semibold text-gray-900">{{ $title }}</p>
            <p class="text-xs text-gray-400 mt-0.5">{{ $property }}</p>
        </div>
</div>