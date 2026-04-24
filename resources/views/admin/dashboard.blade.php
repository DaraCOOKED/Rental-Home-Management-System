@extends('layouts.app')


@section('content')

<div class=" bg-gray-50 p-6 font-sans">

    {{-- Header --}}
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
        <p class="text-gray-500 mt-1">Welcome back! Here's what's happening with your properties.</p>
    </div>

    {{-- Stats Cards --}}

    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-3 mb-8">

    <x-stat-card label="Total Properties" value="48" change="+4 this month" iconBg="bg-blue-500">
        <x-slot:icon>
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <x-heroicon-o-home class="w-full h-full m-auto" />
            </svg>
        </x-slot:icon>
    </x-stat-card>

    <x-stat-card label="Active Tenants" value="142" change="+12 this month" iconBg="bg-green-500">
        <x-slot:icon>
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <x-heroicon-o-users class="w-full h-full m-auto" />
            </svg>
        </x-slot:icon>
    </x-stat-card>  


    <x-stat-card label="Monthly Revenue" value="$184,500" change="+8.2% from last month" iconBg="bg-purple-500">
        <x-slot:icon>
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <x-heroicon-o-currency-dollar class="w-full h-full m-auto" />
            </svg>
        </x-slot:icon>
    </x-stat-card>

    <x-stat-card label="Occupancy Rate" value="94.5%" change="+2.1% from last month" iconBg="bg-orange-500">
        <x-slot:icon>
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <x-heroicon-o-arrow-trending-up class="w-full h-full m-auto" />
            </svg>
        </x-slot:icon>
    </x-stat-card>
</div>








<div class="flex gap-4 mb-8">

    {{-- Left Card 40% --}}
    <div class="w-2/5 bg-white rounded-2xl  border border-gray-100 p-6">
        
        {{-- Header --}}
        <div class="flex items-center gap-2 mb-4">
            
            <h5 class="text-base font-semibold text-gray-900">Property Status</h5   >
        </div>

        {{-- Status Rows --}}
        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center mb-2 gap-2">
                    <span class="w-3 h-3 rounded-full bg-green-500"></span>
                    <span class="text-sm  text-gray-600">Occupied</span>
                </div>
                <span class="text-sm font-semibold text-gray-900">45</span>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center mb-2 gap-2">
                    <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
                    <span class="text-sm text-gray-600">Vacant</span>
                </div>
                <span class="text-sm font-semibold text-gray-900">3</span>
            </div>

            <div class="flex items-center mb-2 justify-between">
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-red-500"></span>
                    <span class="text-sm text-gray-600">Maintenance</span>
                </div>
                <span class="text-sm font-semibold text-gray-900">2</span>
            </div>
        </div>

        {{-- Divider + Total --}}
        <div class="border-t border-gray-300 mt-4   pt-4 flex items-center justify-between">
            <span class="text-sm font-medium text-gray-700">Total Units</span>
            <span class="text-sm font-bold text-gray-900">50</span>
        </div>

    </div>

    {{-- Right Card 60% --}}
    <div class="w-3/4 bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
        <div class="flex items-center gap-2 mb-5">
            <h5 class="text-base font-semibold text-gray-900">Quick Actions</h5>
        </div>
    </div>

</div>



</div>

@endsection