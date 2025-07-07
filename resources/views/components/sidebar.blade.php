<aside class="w-64 bg-gray-800 text-white px-6 py-8">
    <div class="text-2xl font-bold mb-8">🛠️ SOC/NOC Panel</div>
    <nav class="space-y-3">
        <a href="{{ route('dashboard') }}" class="block hover:text-blue-400">📊 Dashboard</a>
        <a href="{{ route('soc') }}" class="block hover:text-blue-400">🛡️ SOC</a>
        <a href="{{ route('noc') }}" class="block hover:text-blue-400">📡 NOC</a>

        

        @role('superadmin')
            <div class="mt-6 border-t border-gray-600 pt-4">
                <div class="text-xs text-gray-400 uppercase">Superadmin</div>
                <a href="{{ route('admin.users.index') }}" class="block hover:text-yellow-400 mt-2">👥 Manajemen User</a>
                <a href="{{ route('admin.roles.index') }}" class="block hover:text-yellow-400">🔐 Role & Permission</a>
            </div>
        @endrole

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="mt-6 text-left hover:text-red-400">🚪 Logout</button>
        </form>
    </nav>
</aside>
