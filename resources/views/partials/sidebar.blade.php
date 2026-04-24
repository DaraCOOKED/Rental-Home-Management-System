<div>
    <div class="sidebar shadow-sm border border-gray-100 p-3 flex flex-col" style="width: 250px; height: 100vh; position: fixed; top: 0; left: 0;">
        
        {{-- Logo --}}
        <div class="flex items-center gap-3 mb-3">
    <div class="flex items-center justify-center bg-blue-600 w-12 h-12 mb-3 rounded-xl shrink-0">
        <x-heroicon-o-building-office-2 class="w-7 h-7 text-white" />
    </div>
    <div>
        <h4 class="text-xl font-bold text-gray-900 leading-tight">PropManager</h4>
        <p class="text-sm text-gray-400">Rental Management</p>
    </div>
</div>

        {{-- Line --}}
        <div class="border-b border-gray-200 mb-2"></div>

        {{-- Nav --}}
        <nav class="flex-1 px-2 py-2 space-y-1">

            <a href="/admin/dashboard"
            class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition !no-underline hover:!no-underline 
            {{ request()->is('admin/dashboard') ?
            'bg-blue-100 text-blue-600' : '!text-gray-900 hover:bg-blue-50 hover:!text-blue-600' }}">
                <x-heroicon-o-building-office-2 class="w-5 h-5 shrink-0" /> Dashboard
            </a>

            <a href="/admin/properties/create"
            class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition !no-underline hover:!no-underline 
            {{ request()->is('admin/properties*') ?
            'bg-blue-100 text-blue-600' : '!text-gray-900 hover:bg-blue-50 hover:!text-blue-600' }}">
                <x-heroicon-o-home-modern class="w-5 h-5 shrink-0" /> Properties
            </a>

            <a href="/admin/tenants/create"
            class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition !no-underline hover:!no-underline 
            {{ request()->is('admin/tenants*') ?
            'bg-blue-100 text-blue-600' : '!text-gray-900 hover:bg-blue-50 hover:!text-blue-600' }}">
                <x-heroicon-o-user-group class="w-5 h-5 shrink-0" /> Tenants
            </a>

            
            <a href="/admin/payments/create"
            class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition !no-underline hover:!no-underline 
            {{ request()->is('admin/payments*') ?
            'bg-blue-100 text-blue-600' : '!text-gray-900 hover:bg-blue-50 hover:!text-blue-600' }}">
                <x-heroicon-o-currency-dollar class="w-5 h-5 shrink-0" /> Payments
            </a>

            <a href="/admin/leases/create"
            class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition !no-underline hover:!no-underline 
            {{ request()->is('admin/leases*') ?
            'bg-blue-100 text-blue-600' : '!text-gray-900 hover:bg-blue-50 hover:!text-blue-600' }}">
                <x-heroicon-o-document-text class="w-5 h-5 shrink-0" /> Leases
            </a>


            <a href="/admin/maintenance/create"
            class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition !no-underline hover:!no-underline 
            {{ request()->is('admin/maintenance*') ?
            'bg-blue-100 text-blue-600' : '!text-gray-900 hover:bg-blue-50 hover:!text-blue-600' }}">
                <x-heroicon-o-wrench-screwdriver class="w-5 h-5 shrink-0" /> Maintenace
            </a>

        </nav>

        {{-- Line --}}
        <div class="border-b border-gray-200 mb-2"></div>

        {{-- Profile + Logout --}}
        <div class="px-2 py-2">
            <div class="flex items-center gap-3 mb-3">
                <div class="flex items-center justify-center bg-gray-600 rounded-full w-10 h-10 shrink-0">
                    <x-heroicon-o-user class="w-5 h-5 text-white" />
                </div>
                <div class="overflow-hidden">
                    <p class="text-sm font-semibold text-gray-800 truncate">{{ auth()->user()->name ?? 'Admin User' }}</p>
                    <p class="text-xs text-gray-400 truncate">{{ auth()->user()->email ?? 'admin@pse.ngo' }}</p>
                </div>
            </div>

            {{-- Logout --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-red-500 hover:bg-red-50 transition">
                    <x-heroicon-o-arrow-right-on-rectangle class="w-5 h-5 shrink-0" /> Logout
                </button>
            </form>
        </div>

    </div>
</div>