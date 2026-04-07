
<div class="w-80 bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition">

    <!-- Image -->
    <div class="h-44 overflow-hidden">
        <img src="{{ $image }}" class="w-full h-full object-cover" />
    </div>

    <div class="p-4 space-y-3">

        <!-- Status -->
        <span class="inline-block px-2 py-1 text-xs font-medium rounded-md
            {{ $status === 'Available' ? 'bg-green-100 text-green-600' : 'bg-red-100 text-red-600' }}">
            {{ $status }}
        </span>

        <!-- Title + Price -->
        <div class="flex justify-between items-center">
            <h2 class="text-lg font-semibold text-gray-800">{{ $title }}</h2>
            <span class="text-sm font-semibold text-blue-600">{{ $price }}</span>
        </div>

        <p class="text-sm text-gray-500">{{ $location }}</p>
        <p class="text-sm text-gray-600">{{ $description }}</p>
        <p class="text-xs text-gray-400">{{ $amount }}</p>

        <button class="w-full py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
            View Details
        </button>

    </div>
</div>
