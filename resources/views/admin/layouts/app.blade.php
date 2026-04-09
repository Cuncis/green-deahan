<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex, nofollow" />
    <title>@yield('title', 'Admin') – Green Deahan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: var(--font-inter);
        }
    </style>
</head>

<body class="bg-gray-950 text-gray-100 min-h-screen flex">

    {{-- Sidebar --}}
    <aside class="w-56 shrink-0 bg-gray-900 border-r border-gray-800 flex flex-col min-h-screen">
        <div class="px-5 py-5 border-b border-gray-800">
            <span class="font-bold text-green-400 text-sm tracking-wide uppercase">Green Deahan</span>
            <p class="text-gray-500 text-xs mt-0.5">Admin Panel</p>
        </div>

        <nav class="flex-1 px-3 py-4 space-y-1">
            <a href="{{ route('admin.dashboard') }}"
                class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-sm transition
                      {{ request()->routeIs('admin.dashboard') ? 'bg-green-800/40 text-green-300' : 'text-gray-400 hover:bg-gray-800 hover:text-white' }}">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                Dashboard
            </a>

            <a href="{{ route('admin.posts.index') }}"
                class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-sm transition
                      {{ request()->routeIs('admin.posts.*') ? 'bg-green-800/40 text-green-300' : 'text-gray-400 hover:bg-gray-800 hover:text-white' }}">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z" />
                </svg>
                Blog Posts
            </a>

            <a href="{{ route('admin.galeri.index') }}"
                class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-sm transition
                      {{ request()->routeIs('admin.galeri.*') ? 'bg-green-800/40 text-green-300' : 'text-gray-400 hover:bg-gray-800 hover:text-white' }}">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                Galeri
            </a>
        </nav>

        <div class="px-3 py-4 border-t border-gray-800">
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="flex items-center gap-2.5 w-full px-3 py-2 rounded-lg text-sm text-gray-400
                               hover:bg-red-900/30 hover:text-red-400 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    Logout
                </button>
            </form>
        </div>
    </aside>

    {{-- Main Content --}}
    <div class="flex-1 flex flex-col min-h-screen overflow-x-hidden">

        <header class="bg-gray-900 border-b border-gray-800 px-6 py-4 flex items-center justify-between">
            <h1 class="text-sm font-semibold text-gray-200">@yield('header', 'Dashboard')</h1>
            <span class="text-xs text-gray-500">{{ Auth::user()->name }}</span>
        </header>

        <main class="flex-1 p-6">

            @if (session('success'))
                <div class="mb-4 rounded-lg bg-green-900/40 border border-green-700/40 text-green-300 text-sm px-4 py-3">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="mb-4 rounded-lg bg-red-900/40 border border-red-700/40 text-red-300 text-sm px-4 py-3">
                    {{ session('error') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>

</body>

</html>