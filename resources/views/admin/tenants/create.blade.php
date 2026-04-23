@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="bg-white min-h-screen p-6">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        
        <div>
            <h1 class="text-2xl font-semibold text-gray-800">Tenants</h1>
            <p class="text-gray-500 text-sm">
                Manage tenant information and profiles
            </p>
        </div>

        <!-- USING UL LI -->
        <ul>
            <li>
                <a href="" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center gap-2 !no-underline hover:!no-underline">
                  
                   + Add Tenant
                </a>
            </li>
        </ul>

    </div>
 <div class="w-[260px] bg-white rounded-2xl shadow-sm shadow-black-100 hover:shadow-md transition p-5 mt-4">

    <!-- Icon -->
    <div class="flex justify-center mb-4">
        <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>
        </div>
    </div>

    <!-- Content -->
    <div class="text-center space-y-1">
        <p class="text-gray-500 text-sm">Total Tenants</p>
        <p class="font-bold text-3xl text-gray-800">10</p>
        <p class="text-xs text-gray-400">+2 new this month</p>
    </div>

</div>
</div>

@endsection