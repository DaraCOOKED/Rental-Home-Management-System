@extends('layouts.app')

@section('content')

<div class="bg-gray-50 p-6 font-sans">

    {{-- Header --}}
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
        <p class="text-gray-500 mt-1">Welcome back! Here's what's happening with your properties.</p>
    </div>

    {{-- Current Rental Hero Card --}}
    <div class="relative rounded-2xl bg-blue-600 p-6 mb-6 overflow-hidden">
        <div class="absolute -right-10 -top-10 w-48 h-48 rounded-full bg-blue-500 opacity-40"></div>
        <div class="absolute right-24 -bottom-8 w-32 h-32 rounded-full bg-blue-700 opacity-30"></div>

        <div class="relative flex items-start justify-between">
            <div>
                <h2 class="text-white font-semibold text-xl mb-3">Current Rental</h2>
                <div class="space-y-2">
                    <div class="flex items-center gap-2 text-blue-100 text-sm">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                            <polyline points="9 22 9 12 15 12 15 22"/>
                        </svg>
                        <span>Pearl River Plaza - Unit A-501</span>
                    </div>
                    <div class="flex items-center gap-2 text-blue-100 text-sm">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                            <line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/>
                            <line x1="3" y1="10" x2="21" y2="10"/>
                        </svg>
                        <span>Lease: 2024-01-01 to 2025-12-31</span>
                    </div>
                    <div class="flex items-center gap-2 text-blue-100 text-sm">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                            <line x1="1" y1="10" x2="23" y2="10"/>
                        </svg>
                        <span>Monthly Rent: ¥4,500</span>
                    </div>
                </div>
            </div>

            <div class="bg-white bg-opacity-20 rounded-xl px-4 py-3 text-right flex-shrink-0">
                <div class="text-blue-100 text-xs mb-1">Status</div>
                <div class="text-white font-semibold text-base">Active</div>
            </div>
        </div>
    </div>

    {{-- 3 Stat Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">

        {{-- Payments --}}
        <div class="bg-white rounded-2xl border border-gray-100 p-5 flex items-start justify-between shadow-sm">
            <div>
                <p class="text-gray-500 text-sm font-medium mb-3">Payments</p>
                <p class="text-3xl font-semibold text-gray-900">2</p>
                <p class="text-gray-400 text-sm mt-1">Total payments made</p>
            </div>
            <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                    <line x1="1" y1="10" x2="23" y2="10"/>
                </svg>
            </div>
        </div>

        {{-- Maintenance --}}
        <div class="bg-white rounded-2xl border border-gray-100 p-5 flex items-start justify-between shadow-sm">
            <div>
                <p class="text-gray-500 text-sm font-medium mb-3">Maintenance</p>
                <p class="text-3xl font-semibold text-gray-900">1</p>
                <p class="text-gray-400 text-sm mt-1">Active requests</p>
            </div>
            <div class="w-10 h-10 rounded-xl bg-orange-50 flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                </svg>
            </div>
        </div>

        {{-- Next Payment --}}
        <div class="bg-white rounded-2xl border border-gray-100 p-5 flex items-start justify-between shadow-sm">
            <div>
                <p class="text-gray-500 text-sm font-medium mb-3">Next Payment</p>
                <p class="text-3xl font-semibold text-gray-900">¥4,500</p>
                <p class="text-gray-400 text-sm mt-1">Due: 2024-05-01</p>
            </div>
            <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                    <line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/>
                    <line x1="3" y1="10" x2="21" y2="10"/>
                </svg>
            </div>
        </div>

    </div>

    {{-- Bottom Two Panels --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">

        {{-- Recent Payments --}}
        <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-semibold text-gray-900">Recent Payments</h3>
                <a href="#" class="text-blue-500 text-sm hover:text-blue-700 transition-colors">View all</a>
            </div>

            <div class="divide-y divide-gray-50">

                <div class="flex items-center justify-between py-3">
                    <div>
                        <p class="font-medium text-gray-900 text-sm">¥4,500</p>
                        <p class="text-gray-400 text-xs mt-0.5">Paid on 2024-03-05</p>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Paid</span>
                </div>

                <div class="flex items-center justify-between py-3">
                    <div>
                        <p class="font-medium text-gray-900 text-sm">¥4,500</p>
                        <p class="text-gray-400 text-xs mt-0.5">Paid on 2024-04-02</p>
                    </div>
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Paid</span>
                </div>

            </div>
        </div>

        {{-- Active Maintenance Requests --}}
        <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-semibold text-gray-900">Active Maintenance Requests</h3>
                <a href="#" class="text-blue-500 text-sm hover:text-blue-700 transition-colors">View all</a>
            </div>

            <div class="divide-y divide-gray-50">

                <div class="flex items-start gap-3 py-3">
                    <div class="w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="12" y1="8" x2="12" y2="12"/>
                            <line x1="12" y1="16" x2="12.01" y2="16"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-medium text-gray-900 text-sm">Kitchen faucet leaking</p>
                        <p class="text-gray-400 text-xs mt-0.5">In Progress • 4/1/2024</p>
                    </div>
                </div>

            </div>

            {{-- New Request Button --}}
            <div class="mt-4 pt-3 border-t border-gray-50">
                <a href="#" class="w-full flex items-center justify-center gap-2 py-2.5 px-4 rounded-xl border-2 border-dashed border-gray-200 text-gray-400 text-sm hover:border-blue-300 hover:text-blue-500 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                    </svg>
                    New maintenance request
                </a>
            </div>
        </div>

    </div>

</div>

@endsection 