@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class=" bg-gray-50 p-6 font-sans">

    <div class="flex justify-between items-center mb-6">
        
        <div>
            <h1 class="text-2xl font-semibold text-gray-800">Property</h1>
            <p class="text-gray-500 text-sm">
             Manage your rental property listings
            </p>
        </div>

        <!-- USING UL LI -->
        <ul>
            <li>
                <a href="" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center gap-2 !no-underline hover:!no-underline">
                  
                   + Add Properties
                </a>
            </li>
        </ul>

    </div>
    
  <div class="flex items-center gap-3 w-full">
    
    <div class="relative flex-grow">
        <span class="absolute inset-y-0 left-0 flex items-center pl-4">
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </span>

        <input 
            type="text"
            class="w-full py-3 pl-11 pr-4 text-gray-500 bg-white border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-100 focus:border-blue-400 transition-all"
            placeholder="Search by building, unit, or address..."
        >
    </div>

    <div class="relative min-w-[140px]">
        <select 
            class="appearance-none w-full py-3 px-5 pr-10 text-gray-700 bg-white border-1 xx rounded-xl font-medium focus:outline-none cursor-pointer"
        >
            <option>All Status</option>
            <option>Active</option>
            <option>Pending</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-700">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </div>
    </div>

</div>

   @php
    $properties = [
        [
            'name' => 'Borey Peng Huoth Unit A-501',
            'status' => 'Occupied',
            'property' => 'Condo',
            'start' => '2 bed • 1 bath • 85 m²',
            'end' => '$450 / month',
            'rent' => '',
        ],
        [
            'name' => 'Time Square 3 Unit B-302',
            'status' => 'Maintenance',
            'property' => 'Apartment',
            'start' => '2 bed • 2 bath • 90 m²',
            'end' => '$520 / month',
            'rent' => '',
        ],
        [
            'name' => 'Orkide The Royal Unit C-1201',
            'status' => 'Occupied',
            'property' => 'Apartment',
            'start' => '3 bed • 2 bath • 120 m²',
            'end' => '$850 / month',
            'rent' => '',
        ],
        [
            'name' => 'Borey Peng Huoth Unit A-702',
            'status' => 'Occupied',
            'property' => 'Condo',
            'start' => '2 bed • 1 bath • 78 m²',
            'end' => '$420 / month',
            'rent' => '',
        ],
        [
            'name' => 'Sky Tree Residence Unit D-405',
            'status' => 'Available',
            'property' => 'Apartment',
            'start' => '1 bed • 1 bath • 55 m²',
            'end' => '$300 / month',
            'rent' => '',
        ],
        [
            'name' => 'The Pinnacle Residence Unit E-901',
            'status' => 'Occupied',
            'property' => 'Luxury Condo',
            'start' => '3 bed • 3 bath • 150 m²',
            'end' => '$1,200 / month',
            'rent' => '',
        ],
        [
            'name' => 'Rose Condo Toul Kork Unit F-210',
            'status' => 'Available',
            'property' => 'Apartment',
            'start' => '2 bed • 1 bath • 70 m²',
            'end' => '$380 / month',
            'rent' => '',
        ],
        [
            'name' => 'Borey Chip Mong Land Unit G-115',
            'status' => 'Occupied',
            'property' => 'Townhouse',
            'start' => '3 bed • 2 bath • 110 m²',
            'end' => '$600 / month',
            'rent' => '',
        ],
             [
            'name' => 'Time Square 3 Unit B-302',
            'status' => 'Maintenance',
            'property' => 'Apartment',
            'start' => '2 bed • 2 bath • 90 m²',
            'end' => '$520 / month',
            'rent' => '',
        ],
    ];
@endphp

    <!-- TABLE -->
    <div class="mt-6 w-full">
        <x-property-table :properties="$properties" />
    </div>

</div>


</div>

@endsection











 