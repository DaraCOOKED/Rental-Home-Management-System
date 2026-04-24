@props(['title', 'property', 'priority' => 'Medium', 'date'])

@php
$priorityClass = match($priority) {
    'High'   => 'text-red-600 bg-red-100',
    'Medium' => 'text-yellow-600 bg-yellow-100',
    'Low'    => 'text-green-600 bg-green-100',
    default  => 'text-gray-600 bg-gray-100',
};
@endphp

<div class="bg-gray-50 rounded-xl px-4 py-2.5 flex items-center gap-4">
    <div class="w-10 h-10 rounded-xl mb-12 bg-blue-100 flex items-center justify-center shrink-0">
        <x-heroicon-o-clock class="w-5 h-5 text-blue-500 " />
    </div>
    <div>
        <p class="text-sm font-semibold text-gray-900">{{ $title }}</p>
        <p class="text-xs text-gray-400 ">{{ $property }}</p>
        <div class="flex items-center gap-2 ">
            <span class="text-xs font-medium px-2  rounded-md {{ $priorityClass }}">{{ $priority }}</span>
            <span class="text-xs text-gray-400">{{ $date }}</span>
        </div>
    </div>
</div>