<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- Menggunakan Vite untuk memuat aset --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">
<div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md px-6 py-8">
        <div class="text-2xl font-bold text-blue-800 mb-8">
             <a href="{{ route('dashboard') }}">Panel Monitoring</a>
        </div>

        <nav class="space-y-3">
            {{-- Menu yang bisa diakses semua user --}}
            <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 {{ request()->routeIs('dashboard') ? 'bg-blue-800 text-white' : 'text-blue-800 hover:bg-blue-100' }} rounded-md">
                <span>📊 Dashboard</span>
            </a>

            {{-- Menu SOC (hanya untuk yang punya izin) --}}
            @can('view-soc-dashboard')
            <a href="{{ route('soc') }}" class="flex items-center px-4 py-2 {{ request()->routeIs('soc') ? 'bg-blue-800 text-white' : 'text-blue-800 hover:bg-blue-100' }} rounded-md">
                <span>🛡️ SOC</span>
            </a>
            @endcan

            {{-- Menu NOC (hanya untuk yang punya izin) --}}
            @can('view-noc-dashboard')
            <a href="{{ route('noc') }}" class="flex items-center px-4 py-2 {{ request()->routeIs('noc') ? 'bg-blue-800 text-white' : 'text-blue-800 hover:bg-blue-100' }} rounded-md">
                <span>📡 NOC</span>
            </a>
            @endcan

            {{-- Menu Khusus Superadmin --}}
            @role('superadmin')
            <div class="pt-4 mt-4 border-t">
                 <h3 class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Admin</h3>
                 <div class="space-y-2 mt-2">
                     <a href="{{ route('admin.users.index') }}" class="flex items-center px-4 py-2 {{ request()->routeIs('admin.users.*') ? 'bg-blue-800 text-white' : 'text-blue-800 hover:bg-blue-100' }} rounded-md">
                        <span>👥 User Management</span>
                    </a>
                    {{-- Tambahkan link manajemen role/permission di sini jika perlu --}}
                 </div>
            </div>
            @endrole

            <!-- Logout -->
            <div class="pt-4 mt-4 border-t">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="w-full">
                    @csrf
                    <button type="submit" class="w-full flex items-center px-4 py-2 text-red-600 hover:bg-red-100 rounded-md text-left">
                        <span>🚪 Logout</span>
                    </button>
                </form>
            </div>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        {{-- Menampilkan header jika ada --}}
        @if (isset($header))
            <header class="bg-white shadow mb-6">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        {{-- Menampilkan konten utama dari setiap halaman --}}
        @yield('content')
    </main>
</div>
</body>
</html>
