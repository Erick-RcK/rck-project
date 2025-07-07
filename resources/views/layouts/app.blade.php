<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SOC/NOC Panel')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
<div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md px-6 py-8">
        <div class="text-2xl font-bold text-blue-800 mb-8">SOC/NOC Panel</div>

        <nav class="space-y-4">
            <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 {{ request()->routeIs('dashboard') ? 'bg-blue-800 text-white' : 'text-blue-800 hover:bg-blue-100' }} rounded-md">
                <span class="ml-2">Dashboard</span>
            </a>
            <a href="{{ route('soc') }}" class="flex items-center px-4 py-2 {{ request()->routeIs('soc') ? 'bg-blue-800 text-white' : 'text-blue-800 hover:bg-blue-100' }} rounded-md">
                <span class="ml-2">SOC</span>
            </a>
            <a href="{{ route('noc') }}" class="flex items-center px-4 py-2 {{ request()->routeIs('noc') ? 'bg-blue-800 text-white' : 'text-blue-800 hover:bg-blue-100' }} rounded-md">
                <span class="ml-2">NOC</span>
            </a>

            <!-- Logout -->
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
               class="flex items-center px-4 py-2 text-red-600 hover:bg-red-100 rounded-md mt-8">
                <span class="ml-2">Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        @yield('content')
    </main>
</div>
</body>
</html>
