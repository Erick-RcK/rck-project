@extends('layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">🔐 Manajemen Role & Permission</h1>

@if(session('success'))
    <div class="bg-green-100 text-green-800 p-2 rounded mb-4">{{ session('success') }}</div>
@endif

<form method="POST" action="{{ route('admin.roles.store') }}" class="mb-6">
    @csrf
    <div class="flex gap-4">
        <input type="text" name="role" placeholder="Nama Role"
               class="border p-2 rounded w-1/2" required>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">+ Tambah Role</button>
    </div>
</form>

<table class="w-full border text-left">
    <thead class="bg-gray-100">
        <tr>
            <th class="p-2">Role</th>
            <th class="p-2">Permissions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($roles as $role)
        <tr class="border-t">
            <td class="p-2 font-semibold">{{ $role->name }}</td>
            <td class="p-2">{{ $role->permissions->pluck('name')->join(', ') ?: '-' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
