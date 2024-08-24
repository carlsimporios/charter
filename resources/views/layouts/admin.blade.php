<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="relative min-h-screen md:flex">
        <!-- Sidebar -->
        <aside class="z-10 bg-[#e7ecfe] text-black w-64 px-2 py-4 absolute inset-y-0 left-0 md:relative">
            <div class="flex items-center px-2 mb-4">
                <!-- Logo and Title -->
                <div class="flex items-center space-x-2 flex-1 mt-2">
                    <a href="">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                    <span class="text-lg font-bold mb-2">
                        Citizen's Charter
                    </span>
                </div>
            </div>
            <!-- Avatar and User Info -->
            <div class="mt-4 flex flex-col items-center">
                @php
                    $role = Auth::user()->role; // Assuming role is a property of the user
                    $avatar = match($role) {
                        'admin' => 'A',
                        'head' => 'H',
                        'sub_head' => 'SH',
                        default => 'U', // Default avatar for unknown roles
                    };
                @endphp
                <div class="w-16 h-16 bg-blue-300 rounded-full flex items-center justify-center text-white text-xl font-bold">
                    {{ $avatar }}
                </div>
                <span class="mt-2 text-lg font-medium">
                    @if($role == 'admin')
                        Admin
                    @elseif($role == 'head')
                        Head
                    @elseif($role == 'sub_head')
                        Subhead
                    @else
                        User
                    @endif
                </span>
            </div>
            <!-- Navigation -->
            <nav class="mt-5 flex flex-col items-center space-y-3">
                <a href="{{ route('mvmsp') }}" class="block py-2.5 px-4 rounded text-center w-48 transition-colors duration-300 {{ request()->routeIs('mvmsp') ? 'bg-[#9fb3fb] text-white' : 'bg-[#cfd9fd] hover:bg-[#9fb3fb]' }}">
                    MVMSP
                </a>
                <a href="{{ route('orgchart') }}" class="block py-2.5 px-4 rounded text-center w-48 transition-colors duration-300 {{ request()->routeIs('org-chart') ? 'bg-[#9fb3fb] text-white' : 'bg-[#cfd9fd] hover:bg-[#9fb3fb]' }}">
                    ORG. CHART
                </a>
                <a href="{{ route('electedofficials') }}" class="block py-2.5 px-4 rounded text-center w-48 transition-colors duration-300 {{ request()->routeIs('elected-officials') ? 'bg-[#9fb3fb] text-white' : 'bg-[#cfd9fd] hover:bg-[#9fb3fb]' }}">
                    ELECTED OFFICIALS
                </a>
                <a href="{{ route('offices') }}" class="block py-2.5 px-4 rounded text-center w-48 transition-colors duration-300 {{ request()->routeIs('offices') ? 'bg-[#9fb3fb] text-white' : 'bg-[#cfd9fd] hover:bg-[#9fb3fb]' }}">
                    OFFICES
                </a>
                <a href="{{ route('events') }}" class="block py-2.5 px-4 rounded text-center w-48 transition-colors duration-300 {{ request()->routeIs('events') ? 'bg-[#9fb3fb] text-white' : 'bg-[#cfd9fd] hover:bg-[#9fb3fb]' }}">
                    EVENTS
                </a>
                <a href="{{ route('notifications') }}" class="block py-2.5 px-4 rounded text-center w-48 transition-colors duration-300 {{ request()->routeIs('notifications') ? 'bg-[#9fb3fb] text-white' : 'bg-[#cfd9fd] hover:bg-[#9fb3fb]' }}">
                    NOTIFICATIONS
                </a>
                <a href="{{ route('pendings') }}" class="block py-2.5 px-4 rounded @if(request()->routeIs('pendings') || request()->routeIs('pending.offices') || request()->routeIs('pending.services')) bg-[#9fb3fb] text-white @else bg-[#cfd9fd] text-gray-600 @endif hover:bg-[#9fb3fb] transition-colors duration-300 text-center w-48">PENDINGS</a>

                <a href="#" class="block py-2.5 px-4 rounded text-center w-48 transition-colors duration-300 {{ request()->is('users') ? 'bg-[#9fb3fb] text-white' : 'bg-[#cfd9fd] hover:bg-[#9fb3fb]' }}">
                    USERS
                </a>
                <a href="#" class="block py-2.5 px-4 rounded text-center w-48 transition-colors duration-300 {{ request()->is('users') ? 'bg-[#9fb3fb] text-white' : 'bg-[#cfd9fd] hover:bg-[#9fb3fb]' }}">
                    PROFILE
                </a>
            </nav>

        </aside>

        <!-- Main Content -->
        <main class="flex-1 bg-[#e7ecfe] m-6 p-6 rounded-lg shadow-md min-h-screen">
            <div>
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
