@extends('layouts.app')

@section('content')

<div class="bg-gray-50 p-6 font-sans">

    {{-- Header --}}
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Payment History</h1>
        <p class="text-gray-500 mt-1">View your rent payment records</p>
    </div>

    {{-- 3 Stat Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">

        {{-- Total Paid --}}
        <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm">
            <p class="text-gray-500 text-sm mb-3">Total Paid</p>
            <p class="text-3xl font-semibold text-green-500">¥9,000</p>
        </div>

        {{-- Pending Payments --}}
        <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm">
            <p class="text-gray-500 text-sm mb-3">Pending Payments</p>
            <p class="text-3xl font-semibold text-yellow-500">1</p>
        </div>

        {{-- Overdue Payments --}}
        <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm">
            <p class="text-gray-500 text-sm mb-3">Overdue Payments</p>
            <p class="text-3xl font-semibold text-red-500">0</p>
        </div>

    </div>

    {{-- Payment Records Table --}}
    <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm">

        {{-- Table Header --}}
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-lg font-semibold text-gray-900">Payment Records</h3>
            <select class="border border-gray-200 rounded-lg px-3 py-2 text-sm text-gray-600 bg-white focus:outline-none focus:ring-2 focus:ring-blue-100">
                <option>All Status</option>
                <option>Paid</option>
                <option>Pending</option>
                <option>Overdue</option>
            </select>
        </div>

        {{-- Table --}}
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-100">
                        <th class="text-left text-xs font-semibold text-gray-400 tracking-wider pb-3 pr-4">PROPERTY</th>
                        <th class="text-left text-xs font-semibold text-gray-400 tracking-wider pb-3 pr-4">AMOUNT</th>
                        <th class="text-left text-xs font-semibold text-gray-400 tracking-wider pb-3 pr-4">DUE DATE</th>
                        <th class="text-left text-xs font-semibold text-gray-400 tracking-wider pb-3 pr-4">PAYMENT DATE</th>
                        <th class="text-left text-xs font-semibold text-gray-400 tracking-wider pb-3 pr-4">METHOD</th>
                        <th class="text-left text-xs font-semibold text-gray-400 tracking-wider pb-3 pr-4">STATUS</th>
                        <th class="text-right text-xs font-semibold text-gray-400 tracking-wider pb-3">RECEIPT</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">

                    {{-- Row 1 --}}
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="py-4 pr-4 text-sm text-gray-800">Pearl River Plaza - A-501</td>
                        <td class="py-4 pr-4 text-sm text-gray-800">¥4,500</td>
                        <td class="py-4 pr-4 text-sm text-gray-800">2024-03-01</td>
                        <td class="py-4 pr-4 text-sm text-gray-800">2024-03-05</td>
                        <td class="py-4 pr-4 text-sm text-gray-800">Alipay</td>
                        <td class="py-4 pr-4">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Paid</span>
                        </td>
                        <td class="py-4 text-right">
                            <a href="#" class="inline-flex items-center gap-1 text-blue-500 text-sm hover:text-blue-700 transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                    <polyline points="7 10 12 15 17 10"/>
                                    <line x1="12" y1="15" x2="12" y2="3"/>
                                </svg>
                                RCP-2024-03-001
                            </a>
                        </td>
                    </tr>

                    {{-- Row 2 --}}
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="py-4 pr-4 text-sm text-gray-800">Pearl River Plaza - A-501</td>
                        <td class="py-4 pr-4 text-sm text-gray-800">¥4,500</td>
                        <td class="py-4 pr-4 text-sm text-gray-800">2024-04-01</td>
                        <td class="py-4 pr-4 text-sm text-gray-800">2024-04-02</td>
                        <td class="py-4 pr-4 text-sm text-gray-800">Alipay</td>
                        <td class="py-4 pr-4">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Paid</span>
                        </td>
                        <td class="py-4 text-right">
                            <a href="#" class="inline-flex items-center gap-1 text-blue-500 text-sm hover:text-blue-700 transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                    <polyline points="7 10 12 15 17 10"/>
                                    <line x1="12" y1="15" x2="12" y2="3"/>
                                </svg>
                                RCP-2024-04-001
                            </a>
                        </td>
                    </tr>

                    {{-- Row 3 - Pending --}}
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="py-4 pr-4 text-sm text-gray-800">Pearl River Plaza - A-501</td>
                        <td class="py-4 pr-4 text-sm text-gray-800">¥4,500</td>
                        <td class="py-4 pr-4 text-sm text-gray-800">2024-05-01</td>
                        <td class="py-4 pr-4 text-sm text-gray-400">-</td>
                        <td class="py-4 pr-4 text-sm text-gray-800">Alipay</td>
                        <td class="py-4 pr-4">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">Pending</span>
                        </td>
                        <td class="py-4 text-right text-gray-300 text-sm">-</td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

</div>

@endsection