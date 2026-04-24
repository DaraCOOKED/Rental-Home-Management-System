@props(['iconBg' => 'bg-blue-500', 'label', 'value', 'change' => null])

<div class="bg-white rounded-2xl border border-gray-100 p-6">
    <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 {{ $iconBg }} rounded-xl flex items-center justify-center">
            {{ $icon }}
        </div>
    </div>
    <p class="text-sm text-gray-500 mb-1">{{ $label }}</p>
    <p class="text-3xl font-bold text-gray-900">{{ $value }}</p>
    @if($change)
        <p class="text-sm text-emerald-500 font-medium mt-1">{{ $change }}</p>
    @endif
</div>