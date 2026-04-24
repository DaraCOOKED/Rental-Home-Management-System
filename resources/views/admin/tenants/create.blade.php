@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class=" min-h-screen p-6">

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
  <div class="flex flex-wrap gap-4 ml-12 mt-10">
        
    <x-card-tenant title="Total Tenants" total="250" trend="+2 new this month">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
        </svg>
    </x-card-tenant>

    <x-card-tenant title="Update this month" total="252" trend="+2 From this month">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
        </svg>
    </x-card-tenant>

    <x-card-tenant title="Pending" total="8" trend="+8 From this month, Today 2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
    </x-card-tenant>
    
    <x-card-tenant title="Overdue" total="6" trend="2 from Three day ago,4 from Today">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
    </x-card-tenant>

</div>



<div class="ml-12 mr-12 mb-6 mt-10">
    <div class="relative">
        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </span>
        
        <input 
            type="text" 
            class="w-full py-3 pl-10 pr-4 text-gray-700 bg-white border border-gray-200 rounded-xl focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-100 transition-all shadow-sm" 
            placeholder="Search tenants by name, email, or property..."
        >
    </div>

</div>


@php
    $myTenants = [
        [
            'name' => 'Khem muny',
            'status' => 'Active',
            'email' => 'munykhem@email.com',
            'phone' => '(555) 123-4567',
            'property' => 'Sunset Villa #12',
            'start' => '2025-04-15',
            'end' => '2026-04-15',
            'rent' => '$2,500/mo',
            'payment_status' => 'Up to Date'
        ], // <--- Comma here
      
        [
            'name' => 'Dara Somnang',
            'status' => 'Active',
            'email' => 'dara.j@email.com',
            'phone' => '(555) 234-5678',
            'property' => 'Oak Street Apt 6B',
            'start' => '2024-01-01',
            'end' => '2026-12-31',
            'rent' => '$1,800/mo',
            'payment_status' => 'Up to Date'
        ], // <--- Comma here

        [
            'name' => 'Hai Theara',
            'status' => 'Active',
            'email' => 'theara@email.com',
            'phone' => '(555) 234-5678',
            'property' => 'Oak Street Apt 5B',
            'start' => '2024-01-01',
            'end' => '2026-12-31',
            'rent' => '$1,800/mo',
            'payment_status' => 'Up to Date'
        ], // <--- Comma here

        [
            'name' => 'Kong Bunyim',
            'status' => 'Active',
            'email' => 'Kong Bunyim@email.com',
            'phone' => '(555) 234-5678',
            'property' => 'Oak Street Apt 5B',
            'start' => '2024-01-01',
            'end' => '2026-12-31',
            'rent' => '$1,800/mo',
            'payment_status' => 'Up to Date'
        ] ,
          [
            'name' => 'Yan Kakada',
            'status' => 'Active',
            'email' => 'Kakada@email.com',
            'phone' => '(555) 234-5678',
            'property' => 'Oak Street Apt 5B',
            'start' => '2024-01-01',
            'end' => '2026-12-31',
            'rent' => '$1,800/mo',
            'payment_status' => 'Up to Date'
        ],

          [     'name' => 'Ken Chai',
            'status' => 'Active',
            'email' => 'chaiii@email.com',
            'phone' => '(555) 234-5678',
            'property' => 'Oak Street Apt 5B',
            'start' => '2024-01-01',
            'end' => '2026-12-31',
            'rent' => '$1,800/mo',
            'payment_status' => 'Up to Date'
        ]

        
    ];
@endphp

<x-tenant-list :tenants="$myTenants" />



</div>

@endsection