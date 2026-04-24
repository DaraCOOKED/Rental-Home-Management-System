@props(['leases'])

<div class="bg-white border border-gray-100 rounded-2xl shadow-sm overflow-hidden ml-12 mr-12 mb-10">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-gray-50/50 border-b border-gray-100">
                <th class="px-6 py-4 text-[10px] font-bold text-gray-400 uppercase tracking-wider">Tenant</th>
                <th class="px-6 py-4 text-[10px] font-bold text-gray-400 uppercase tracking-wider">Property</th>
                <th class="px-6 py-4 text-[10px] font-bold text-gray-400 uppercase tracking-wider">Start Date</th>
                <th class="px-6 py-4 text-[10px] font-bold text-gray-400 uppercase tracking-wider">End Date</th>
                <th class="px-6 py-4 text-[10px] font-bold text-gray-400 uppercase tracking-wider">Monthly Rent</th>
                <th class="px-6 py-4 text-[10px] font-bold text-gray-400 uppercase tracking-wider">Security Deposit</th>
                <th class="px-6 py-4 text-[10px] font-bold text-gray-400 uppercase tracking-wider">Status</th>
                <th class="px-6 py-4 text-[10px] font-bold text-gray-400 uppercase tracking-wider text-right">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-50">
            @foreach($leases as $lease)
                <tr class="hover:bg-gray-50/80 transition-colors">
                    <td class="px-6 py-4 text-sm font-bold text-slate-800">
                        {{ $lease['name'] }}
                    </td>

                    <td class="px-6 py-4 text-xs text-gray-600 font-medium">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                            {{ $lease['property'] }}
                        </div>
                    </td>

                    <td class="px-6 py-4 text-xs text-gray-500">
                        <div class="flex items-center gap-2">
                            <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                            {{ $lease['start'] }}
                        </div>
                    </td>

                    <td class="px-6 py-4">
                     <div class="flex items-center gap-2 text-xs text-gray-500 mb-0.5">
                            <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                            {{ $lease['end'] }}
                     </div>
                        <p class="text-[10px] text-gray-400 ml-5">14 days left</p>
                    </td>

                    <td class="px-6 py-4 text-sm font-bold text-slate-800">
                        {{ $lease['rent'] }}
                    </td>

                    <td class="px-6 py-4 text-sm text-gray-500">
                        {{ $lease['rent'] }}
                    </td>

                  <td class="px-6 py-4">
    @php
        $statusStyle = match($lease['status']) {
            'Active' => 'bg-green-100 text-green-700',
            'Expiring Soon' => 'bg-orange-100 text-orange-700',
            'Renewal Pending' => 'bg-indigo-100 text-indigo-700',
            default => 'bg-gray-100 text-gray-700',
        };
    @endphp
    <span class="px-3 py-1 {{ $statusStyle }} text-[10px] font-bold rounded-md uppercase whitespace-nowrap">
        {{ $lease['status'] }}
    </span>
    </td>

                    <td class="px-6 py-4 text-right whitespace-nowrap">
                        <div class="flex justify-end gap-3 items-center">
                            <a href="" class="text-blue-600 hover:text-blue-800 text-xs font-bold no-underline">View</a>
                            <a href="" class="text-green-600 hover:text-green-800 text-xs font-bold no-underline">Renew</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>