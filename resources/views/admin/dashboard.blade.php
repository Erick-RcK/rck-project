@extends('layouts.app')

@section('content')
<div>
    <h1 class="text-3xl font-bold mb-4">Dashboard</h1>
    <p class="text-gray-600 mb-6">Selamat datang kembali!</p>

    <div class="grid grid-cols-4 gap-4 mb-6">
        <div class="bg-white p-4 rounded shadow">
            <p class="text-sm text-gray-500">Monitoring Traffic</p>
            <h3 class="text-xl font-bold text-blue-800">Normal</h3>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <p class="text-sm text-gray-500">Firewall Alert</p>
            <h3 class="text-xl font-bold text-red-600">0 Incident</h3>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <p class="text-sm text-gray-500">ISP 1</p>
            <h3 class="text-xl font-bold text-green-600">Online</h3>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <p class="text-sm text-gray-500">ISP 2</p>
            <h3 class="text-xl font-bold text-green-600">Online</h3>
        </div>
    </div>

    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-lg font-semibold mb-4">Aktivitas Terbaru</h2>
        <ul class="space-y-2 text-sm text-gray-700">
            <li>10:00 AM - Server A berhasil direstart</li>
            <li>09:45 AM - Printer POS 1 offline</li>
            <li>09:30 AM - ISP 2 mengalami down 3 menit</li>
            <li>09:00 AM - User admin login dari lokasi baru</li>
        </ul>
    </div>
</div>
@endsection
