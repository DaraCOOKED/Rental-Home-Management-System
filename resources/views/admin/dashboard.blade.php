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

    <x-stat-card label="Total Properties" value="48" change="+4 this month" iconBg="bg-blue-500">
        <x-slot:icon>
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <x-heroicon-o-home class="w-full h-full m-auto" />
            </svg>
        </x-slot:icon>
    </x-stat-card>  


    <x-stat-card label="Total Properties" value="48" change="+4 this month" iconBg="bg-blue-500">
        <x-slot:icon>
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <x-heroicon-o-home class="w-full h-full m-auto" />
            </svg>
        </x-slot:icon>
    </x-stat-card>

    <x-stat-card label="Total Properties" value="48" change="+4 this month" iconBg="bg-blue-500">
        <x-slot:icon>
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <x-heroicon-o-home class="w-full h-full m-auto" />
            </svg>
        </x-slot:icon>
    </x-stat-card>





 

</div>

@endsection