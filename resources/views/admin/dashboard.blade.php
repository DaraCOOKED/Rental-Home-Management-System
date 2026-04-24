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
        <div class="flex items-center gap-2 ">
            <h5 class="text-base font-semibold text-gray-900">Quick Actions</h5>
        </div>
        <div class="grid grid-cols-3 gap-3 ">

    <a href="/admin/properties/create" style="text-decoration:none" class="group flex flex-col items-center justify-center gap-1 p-6 rounded-2xl border-2 border-dashed border-gray-200 hover:border-blue-400 hover:bg-blue-50 transition-all duration-200">
        <x-heroicon-o-building-office-2 class="w-7 h-7 text-gray-400 group-hover:text-blue-500 transition-colors duration-200" />
        <span class="text-sm font-medium text-gray-500 group-hover:text-blue-600 transition-colors duration-200">Add Property</span>
    </a>

    <a href="/admin/tenants/create" style="text-decoration:none" class="group flex flex-col items-center justify-center gap-1 p-6 rounded-2xl border-2 border-dashed border-gray-200 hover:border-blue-400 hover:bg-blue-50 transition-all duration-200">
        <x-heroicon-o-user-group class="w-7 h-7 text-gray-400 group-hover:text-blue-500 transition-colors duration-200" />
        <span class="text-sm font-medium text-gray-500 group-hover:text-blue-600 transition-colors duration-200">Add Tenant</span>
    </a>

    <a href="/admin/payments/create" style="text-decoration:none" class="group flex flex-col items-center justify-center gap-1 p-6 rounded-2xl border-2 border-dashed border-gray-200 hover:border-blue-400 hover:bg-blue-50 transition-all duration-200">
        <x-heroicon-o-currency-dollar class="w-7 h-7 text-gray-400 group-hover:text-blue-500 transition-colors duration-200" />
        <span class="text-sm font-medium text-gray-500 group-hover:text-blue-600 transition-colors duration-200">Record Payment</span>
    </a>

    <a href="/admin/leases/create" style="text-decoration:none" class="group flex flex-col items-center justify-center gap-1 p-6 rounded-2xl border-2 border-dashed border-gray-200 hover:border-blue-400 hover:bg-blue-50 transition-all duration-200">
        <x-heroicon-o-document-text class="w-7 h-7 text-gray-400 group-hover:text-blue-500 transition-colors duration-200" />
        <span class="text-sm font-medium text-gray-500 group-hover:text-blue-600 transition-colors duration-200">New Lease</span>
    </a>

    <a href="/admin/maintenance/create" style="text-decoration:none" class="group flex flex-col items-center justify-center gap-1 p-6 rounded-2xl border-2 border-dashed border-gray-200 hover:border-blue-400 hover:bg-blue-50 transition-all duration-200">
        <x-heroicon-o-wrench-screwdriver class="w-7 h-7 text-gray-400 group-hover:text-blue-500 transition-colors duration-200" />
        <span class="text-sm font-medium text-gray-500 group-hover:text-blue-600 transition-colors duration-200">Maintenance</span>
    </a>

    <a href="/admin/properties" style="text-decoration:none" class="group flex flex-col items-center justify-center gap-1 p-6 rounded-2xl border-2 border-dashed border-gray-200 hover:border-blue-400 hover:bg-blue-50 transition-all duration-200">
        <x-heroicon-o-map-pin class="w-7 h-7 text-gray-400 group-hover:text-blue-500 transition-colors duration-200" />
        <span class="text-sm font-medium text-gray-500 group-hover:text-blue-600 transition-colors duration-200">View Properties</span>
    </a>

</div>
    </div>

</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-3 ">

    {{-- Header --}}
    <div class="flex items-center justify-between ">
        <div class="flex items-center gap-">
             <h5 class="text-base font-semibold text-gray-900">Available Units</h5>
        </div>
        <a href="/admin/properties/create" class="text-sm text-blue-500 font-medium !no-underline hover:!no-underline">View All</a>
    </div>

    {{-- Cards --}}
    <div class="grid grid-cols-3 gap-2">
        <x-unit-card
            name="Sunset Villa #15"
            type="Apartment"
            beds="2"
            baths="2"
            price="2,400"
            location="Downtown"
        />
        <x-unit-card
            name="Oak Street Apt 8A"
            type="Apartment"
            beds="1"
            baths="1"
            price="1,600"
            location="Midtown"
        />
        <x-unit-card
            name="Garden House 22"
            type="House"
            beds="4"
            baths="3"
            price="3,800"
            location="Suburbs"
        />
    </div>

</div>

<div class="flex gap-4 mt-4 mb-4">

    {{-- Left Card 40% --}}
    <div class="w-3/4  bg-white rounded-2xl  border border-gray-100 p-6">
        
        {{-- Header --}}
        <div class="flex items-center justify-between ">
        <div class="flex items-center gap-">
             <h5 class="text-base font-semibold text-gray-900">Recent Payments</h5>
        </div>
        <a href="/admin/payments/create" class="text-sm text-blue-500 font-medium !no-underline hover:!no-underline">View All</a>
    </div>



<div class="space-y-3">
    <x-payment-row name="John Smith"    property="Sunset Villa #12"   amount="2,500" status="Paid" />
    <x-payment-row name="Sarah Johnson" property="Oak Street Apt 5B"  amount="1,800" status="Paid" />
    <x-payment-row name="Michael Brown" property="Park View #201"     amount="3,200" status="Pending" />
    <x-payment-row name="Emily Davis"   property="Riverside Condo 7A" amount="2,100" status="Overdue" />
    <x-payment-row name="David Wilson"  property="Main Street House"  amount="2,800" status="Paid" />
</div>

      

    </div>

    {{-- Right Card 60% --}}
    <div class="w-2/3 bg-white rounded-2xl shadow-sm border border-gray-100 p-6">

       {{-- Header --}}
        <div class="flex items-center justify-between ">
        <div class="flex items-center gap-">
             <h5 class="text-base font-semibold text-gray-900">Maintenance Requests</h5>
        </div>
        <a href="/admin/maintenance/create" class="text-sm text-blue-500 font-medium !no-underline hover:!no-underline">View All</a>
    </div>
   
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <x-heroicon-o-home class="w-full h-full m-auto" />
            </svg>
       
            <div class="space-y-3">
            <x-maintenance-card title="Leaking faucet"    property="Sunset Villa #12"   priority="Medium" date="2026-03-30" />
            <x-maintenance-card title="Broken AC unit"     property="Oak Street Apt 5B"  priority="High"   date="2026-04-01" />
            <x-maintenance-card title="Paint touch-up"     property="Garden House 22"    priority="Low"    date="2026-04-10" />
            <x-maintenance-card title="Paint touch-up"     property="Garden House 22"    priority="Low"    date="2026-04-10" />

        </div>

</div>




@endsection