
<div>
    <div class="sidebar justify-center text-white p-3" style="width: 250px; height: auto; position: fixed; top: 0; left: 0;">
    <div class="flex gap-2 just-center m-auto flex item-center mb-20 center"> 
        <div class="justify-center item-center text-center flex bg-blue-600 h-auto w-auto rounded-xl">
             <x-heroicon-o-home class="w-11 text-white text-xl" />
        </div>
        <div class=" w-10 flex-shrink-0 block h-10">
            <h4 class="text-base font-bold text-black text-xl flex-shrink-0">PropManager</h4>
            <div class="text-sm text-gray-300 text-nowrap flex ">Rental Management</div>
        </div>
    </div>
<!-- Line -->
    <div class="border-b border-gray-200 pb-4">
    </div>

 <!-- Nav -->
  <nav class="flex-1 px-3 py-4 space-y-1">

    <a href="/admin/dashboard"
    class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition !no-underline hover:!no-underline 
    {{ request()->is('admin/dashboard') ?
    'bg-blue-200 text-blue-600' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}">
        <x-heroicon-o-squares-2x2 class="w-5 h-5 shrink-0" /> Dashboard

    <a href="/admin/properties/create"
 class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition !no-underline hover:!no-underline 
 {{ request()->is('admin/dashboard') ?
   ' text-blue-600' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}">
    <x-heroicon-o-squares-2x2 class="w-5 h-5 shrink-0" /> Properties
</a>
<a href="/admin/tenants/create"
 class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition !no-underline hover:!no-underline 
 {{ request()->is('admin/dashboard') ?
   'text-blue-600' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}">
    <x-heroicon-o-squares-2x2 class="w-5 h-5 shrink-0" /> Tenants
</a>
<a href="/admin/payments/create"
 class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition !no-underline hover:!no-underline 
 {{ request()->is('admin/dashboard') ?
   ' text-blue-600' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}">
    <x-heroicon-o-squares-2x2 class="w-5 h-5 shrink-0" /> Payments


</a>



<a href="/admin/maintenance/create  "
 class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition !no-underline hover:!no-underline 
 {{ request()->is('admin/dashboard') ?
   ' text-blue-600' : 'text-gray-600 hover:bg-gray-100 hover:text-gray-900' }}">
    <x-heroicon-o-squares-2x2 class="w-5 h-5 shrink-0" /> Maintenace
</a>



</a>

</nav>





<div class="border-b mt-67 border-gray-200 pb-1">
    </div>

<!-- profile -->
<div class="flex items-center rounded-xl">
            <div class="flex items-center absolute left-7 justify-center bg-gray-600 rounded-full w-10 h-10 shrink-0">
                <x-heroicon-o-user class="w-5 h-5 text-white" />
            </div>
            <div class="justify-center py-3 mt-2 block m-auto overflow-hidden">
                <p class="text-sm font-semibold text-gray-800">{{ auth()->user()->name ?? 'Admin User' }}</p>
                <p class="text-xs text-gray-500 mt-12">{{ auth()->user()->email ?? 'admin@pse.ngo' }}</p>
            </div>
        </div>
</div>
    


</div>
