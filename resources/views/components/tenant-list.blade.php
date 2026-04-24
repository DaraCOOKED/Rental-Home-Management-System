@props(['tenants'])

<div class="bg-white border border-gray-100 rounded-2xl shadow-sm overflow-hidden ml-12 mr-12 mb-10">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-gray-50/50 border-b border-gray-100">
                <th class="px-6 py-4 text-[11px] font-bold text-gray-400 uppercase tracking-wider">Tenant</th>
                <th class="px-6 py-4 text-[11px] font-bold text-gray-400 uppercase tracking-wider">Contact</th>
                <th class="px-6 py-4 text-[11px] font-bold text-gray-400 uppercase tracking-wider">Property</th>
                <th class="px-6 py-4 text-[11px] font-bold text-gray-400 uppercase tracking-wider">Lease Period</th>
                <th class="px-6 py-4 text-[11px] font-bold text-gray-400 uppercase tracking-wider">Rent</th>
                <th class="px-6 py-4 text-[11px] font-bold text-gray-400 uppercase tracking-wider">Status</th>
                <th class="px-6 py-4 text-[11px] font-bold text-gray-400 uppercase tracking-wider text-right">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-50">
            @foreach($tenants as $tenant)
                <tr class="hover:bg-gray-50/80 transition-colors">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 bg-blue-50 rounded-lg flex items-center justify-center text-blue-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-slate-800">{{ $tenant['name'] }}</p>
                                <p class="text-[11px] text-green-500 font-medium flex items-center gap-1">
                                    <span class="w-1 h-1 bg-green-500 rounded-full"></span> {{ $tenant['status'] }}
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-xs text-gray-500 leading-relaxed">
                        <p>{{ $tenant['email'] }}</p>
                        <p>{{ $tenant['phone'] }}</p>
                    </td>
                    <td class="px-6 py-4 text-xs text-gray-600 font-medium">
                        {{ $tenant['property'] }}
                    </td>
                    <td class="px-6 py-4 text-xs text-gray-500 leading-relaxed">
                        <p>Start: {{ $tenant['start'] }}</p>
                        <p>End: {{ $tenant['end'] }}</p>
                    </td>
                    <td class="px-6 py-4 text-sm font-bold text-slate-800">
                        {{ $tenant['rent'] }}
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 bg-green-50 text-green-600 text-[10px] font-bold rounded-full uppercase tracking-tight">
                            {{ $tenant['payment_status'] }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="text-blue-600 hover:text-blue-800 text-xs font-bold no-underline">View Details</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>