@props(['label', 'value', 'valueColor' => 'text-gray-900'])

<div class="bg-white rounded-2xl border border-gray-100 p-2 block">
    <p class="text-sm text-gray-500 ml-1  mt-2 mb-1">{{ $label }}</p>
    <p class="text-2xl ml-1 font-bold {{ $valueColor }}">{{ $value }}</p>
</div>