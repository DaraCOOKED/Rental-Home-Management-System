@props(['title', 'total', 'trend'])

<div class="bg-white py-4 px-6 rounded-3xl shadow-sm border border-gray-100 flex flex-col items-center justify-center text-center w-66">
    
    <div class="w-10 h-10 bg-blue-50 rounded-full flex items-center justify-center mb-2">
        <div class="text-blue-500">
            {{ $slot }}
        </div>
    </div>

    <p class="text-gray-600 text-xs font-medium leading-tight mb-1">{{ $title }}</p>
    
    <p class="text-2xl font-bold text-slate-900 mb-1">{{ $total }}</p>
    
    <span class="text-blue-300 text-[10px] font-semibold leading-tight">
        {{ $trend }}
    </span>
    
</div>