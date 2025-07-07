@php
    $user = Auth::user();
@endphp

<ul class="space-y-2">
    <li>
        <a href="{{ route('dashboard') }}" class="menu-link">📊 Dashboard</a>
    </li>
    <li>
        <a href="{{ route('soc') }}" class="menu-link">📡 SOC</a>
    </li>
    <li>
        <a href="{{ route('noc') }}" class="menu-link">🌐 NOC</a>
    </li>

    {{-- Tampilkan menu Superadmin jika email cocok --}}
    @if ($user && $user->email === 'superadmin@example.com')
        <li class="mt-4 text-gray-400 text-xs uppercase">Superadmin</li>
        <li>
            <a href="{{ route('admin.users.index') }}" class="menu-link">👤 Manajemen User</a>
        </li>
        {{-- Uncomment ini jika Role/Permission aktif kembali --}}
        {{-- 
        <li>
            <a href="{{ route('admin.roles.index') }}" class="menu-link">🔐 Role & Permission</a>
        </li> 
        --}}
    @endif

    <li>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="menu-link w-full text-left">
                🚪 Logout
            </button>
        </form>
    </li>
</ul>
