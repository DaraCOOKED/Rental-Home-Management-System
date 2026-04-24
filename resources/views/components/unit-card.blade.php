@props(['name', 'type', 'beds', 'baths', 'price', 'location', 'status' => 'Available'])

<div class="bg-white rounded-xl border border-gray-200 p-3 flex flex-col">
    <div class="flex items-center justify-between">
        <h5 class="text-base font-bold text-gray-900">{{ $name }}</h5>
        <span class="text-xs font-medium text-green-600 bg-green-100   rounded-full">{{ $status }}</span>
    </div>
    <p class="text-sm text-gray-400">{{ $type }}</p>
    <p class="text-sm text-gray-600">{{ $beds }} beds &bull; {{ $baths }} baths</p>
    <div class="flex items-center justify-between ">
        <p class="text-base font-bold text-gray-900">${{ $price }}/mo</p>
        <p class="text-sm text-gray-400">{{ $location }}</p>
    </div>
</div>