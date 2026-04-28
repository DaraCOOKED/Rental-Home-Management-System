<!DOCTYPE html>
<html lang="en" class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center p-4">
<head>
    <meta charset="UTF-8">
     @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="bg-white rounded-lg shadow w-100 p-3 flex flex-col">

        <div class=" w-full h-20 justify-center flex text-center item-center ">
            <x-heroicon-o-users class="w-14 text-blue-700 h-14 m-auto" />
        </div>

        <div class=" h-20 w-full">
            <h2 class="text-center font-semibold text-2xl">Jinlong Property Mangement</h2>
            <p class="text-center text-gray-400 ">Rental Home Management System</p>
        </div>

        <div class="text-pretty h-24 w-full p-4 block">
            <div class=" text-gray-700 justify-left text-left flex ">Login As</div>
            <div class="flex min-screen h-full w-full just-center gap-2 m-auto item-center">

                <div class="flex gap-2 justify-center item-center flex m-auto rounded-xl w-fit">

               <div class="flex gap-2 justify-center item-center m-auto center rounded-xl w-fit">
                    <a href="/login"
                    class=" rounded-lg w-full py-5 text-sm px-15 border font-medium  {{ request()->is('login') ? 'bg-blue-50 text-blue-500 shadow-sm border border-blue-400 border-3' : 'text-gray-500 hover:text-gray-700' }}">
                        Admin
                    </a>
                    <a href="/tenant/login"
                    class=" py-4 rounded-lg px-15 font-medium border {{ request()->is('tenant/login') ? 'bg-blue-50 text-blue-500 shadow-sm border border-blue-400 border-3' : 'text-gray-500 hover:text-gray-700' }}">
                        Tenant
                    </a>
               </div>
                </div>
            </div>
        </div>
<form method="POST" action="{{ url('/tenant/login') }}">
    @csrf
        @if ($errors->any())
            <div class="px-3.5">
                <ul class="text-red-500 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="p-3.5">
            <label class="text-sm text-gray-600 mb-1 block">Email</label>
            <input 
            type="email" 
            name="email"
            value="tenant@pse.ngo"
                class="w-full border border-gray-300 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400">
       </div>

        <div class="mb-1 p-3.5">
            <label for="email" class="text-sm text-gray-600 mb-1 block form-label">Password</label>
            <input type="password" 
                name="password"
                placeholder="password"
                id="password"
                 class=" form-control w-full border border-gray-300 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div class=" w-full mb-5 flex ">
             <button type="submit"
                class="w-90 m-auto bg-blue-600 text-white py-3 rounded-xl text-sm font-medium hover:bg-blue-700 transition">
                Login
            </button>
        </div>
</form>

        <div class="p-1 m-auto text-center w-full">
            <p class="text-gray-500 text-xs">Demo credential are pre-filled</p >
            <p class="text-sm text-gray-500">Swich between Admin and Tenant to see different portals</p>
        </div>

    </div>
</body>
</html>