<div>
    <div class="sidebar shadow-sm border border-gray-100 p-3 flex flex-col" style="width: 250px; height: 100vh; position: fixed; top: 0; left: 0;">
        
        {{-- Logo --}}
        <div class="flex items-center gap-3 mb-3">
    <div class="flex items-center justify-center bg-blue-600 w-12 h-12 mb-3 rounded-xl shrink-0">
         <style>
        .bg-box { animation: popIn 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards; opacity: 0; }
        .house   { animation: dropDown 0.5s ease forwards 0.4s; opacity: 0; }
        .key     { animation: slideIn 0.5s ease forwards 0.7s; opacity: 0; }
        .key-hole{ animation: fadeIn 0.3s ease forwards 1s; opacity: 0; }

        @keyframes popIn    { 0% { opacity:0; transform:scale(0.5); } 100% { opacity:1; transform:scale(1); } }
        @keyframes dropDown { 0% { opacity:0; transform:translateY(-20px); } 100% { opacity:1; transform:translateY(0); } }
        @keyframes slideIn  { 0% { opacity:0; transform:translateX(-20px); } 100% { opacity:1; transform:translateX(0); } }
        @keyframes fadeIn   { 0% { opacity:0; } 100% { opacity:1; } }
    </style>

    <svg width="48" height="48" viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg">
        <rect class="bg-box" x="0" y="0" width="300" height="300" rx="52" fill="#2563EB"/>
        <g class="house">
            <polygon points="150,55 78,113 222,113" fill="white"/>
            <rect x="90" y="113" width="46" height="50" rx="4" fill="white"/>
            <rect x="164" y="113" width="46" height="50" rx="4" fill="white"/>
            <rect x="124" y="113" width="30" height="30" rx="3" fill="#2563EB"/>
        </g>
        <g class="key">
            <circle cx="126" cy="215" r="22" fill="none" stroke="white" stroke-width="9"/>
            <rect x="144" y="209" width="58" height="10" rx="5" fill="white"/>
            <rect x="188" y="219" width="10" height="18" rx="4" fill="white"/>
            <rect x="168" y="219" width="10" height="14" rx="4" fill="white"/>
        </g>
        <g class="key-hole">
            <circle cx="126" cy="215" r="8" fill="#2563EB"/>
        </g>
    </svg>
    </div>
    <div>
        <h4 class="text-xl font-bold text-gray-900 leading-tight">Manager</h4>
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


            <a href="/admin/maintenance"
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
                <div class="block">
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