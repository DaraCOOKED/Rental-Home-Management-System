@props(['properties'])

<div class="bg-white border border-gray-100 rounded-2xl shadow-sm overflow-hidden">

    <table class="w-full text-left">

        <thead>
            <tr class="bg-gray-50 border-b border-gray-100">
                <th class="px-6 py-4 text-[10px] font-bold text-gray-400 uppercase">Property</th>
                <th class="px-6 py-4 text-[10px] font-bold text-gray-400 uppercase">Type</th>
                <th class="px-6 py-4 text-[10px] font-bold text-gray-400 uppercase">Details</th>
                <th class="px-6 py-4 text-[10px] font-bold text-gray-400 uppercase">Rent/Month</th>
                <th class="px-6 py-4 text-[10px] font-bold text-gray-400 uppercase"></th>
                <th class="px-6 py-4 text-[10px] font-bold text-gray-400 uppercase"> Status</th>
                <th class="px-6 py-4 text-[10px] font-bold text-gray-400 uppercase text-right">Actions</th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-50">

            @foreach($properties as $item)

                <tr class="hover:bg-gray-50 transition">

                    <td class="px-6 py-4 text-sm font-bold text-slate-800">
                        {{ $item['name'] }}
                    </td>

                    <td class="px-6 py-4 text-xs text-gray-600">
                        {{ $item['property'] }}
                    </td>

                    <td class="px-6 py-4 text-xs text-gray-500">
                        {{ $item['start'] }}
                    </td>

                    <td class="px-6 py-4 text-xs text-gray-500">
                        {{ $item['end'] }}
                    </td>

                    <td class="px-6 py-4 text-sm font-bold text-slate-800">
                        {{ $item['rent'] }}
                    </td>

                    <td class="px-6 py-4">
                        @php
                            $statusStyle = match($item['status']) {
                                'Available' => 'bg-green-100 text-green-700',
                                'Occupied' => 'bg-blue-100 text-red-500',
                                'Maintenance' => 'bg-orange-100 text-blue-700',
                                default => 'bg-gray-100 text-gray-700',
                            };
                        @endphp

                        <span class="px-3 py-1 {{ $statusStyle }} text-[10px] font-bold rounded-md uppercase">
                            {{ $item['status'] }}
                        </span>
                    </td>

                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-3">
                            <a class="text-blue-600 text-xs font-bold"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
</svg>
</a>
                            <a class="text-green-600 text-xs font-bold"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
</svg>
</a>
                        </div>
                    </td>

                </tr>

            @endforeach

        </tbody>
    </table>
</div>