<aside class="w-64 bg-gray-800 text-white flex flex-col py-6 px-4">
    <h2 class="text-xl font-bold mb-6">🔒 SOC/NOC Panel</h2>
    <nav class="flex flex-col gap-3">
        <a href="{{ route('dashboard') }}" class="hover:text-blue-400">📊 Dashboard</a>
        <a href="{{ route('soc') }}" class="hover:text-blue-400">🛡️ SOC</a>
        <a href="{{ route('noc') }}" class="hover:text-blue-400">📡 NOC</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-left hover:text-red-400 mt-6">🚪 Logout</button>
        </form>
    </nav>
</aside>
