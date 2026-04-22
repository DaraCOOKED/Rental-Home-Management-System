@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class=" bg-gray-50 p-6 font-sans">

    {{-- Header --}}
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
        <p class="text-gray-500 mt-1">Welcome back! Here's what's happening with your properties.</p>
    </div>

    {{-- Stats Cards --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5 mb-8">

        {{-- Total Properties --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <div class="flex items-start justify-between mb-4">
                <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 9.75L12 3l9 6.75V21H3V9.75z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 21V12h6v9"/>
                    </svg>
                </div>
            </div>
            <p class="text-sm text-gray-500 mb-1">Total Properties</p>
            <p class="text-3xl font-bold text-gray-900">48</p>
            <p class="text-sm text-emerald-500 font-medium mt-1">+4 this month</p>
        </div>

        {{-- Active Tenants --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <div class="flex items-start justify-between mb-4">
                <div class="w-12 h-12 bg-emerald-500 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a4 4 0 00-5-3.87M9 20H4v-2a4 4 0 015-3.87m6-4.13a4 4 0 11-8 0 4 4 0 018 0zm6 0a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
            </div>
            <p class="text-sm text-gray-500 mb-1">Active Tenants</p>
            <p class="text-3xl font-bold text-gray-900">142</p>
            <p class="text-sm text-emerald-500 font-medium mt-1">+12 this month</p>
        </div>

 

</div>

@endsection