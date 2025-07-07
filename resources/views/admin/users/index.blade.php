<?php

// File: resources/views/admin/users/index.blade.php

use Illuminate\Support\Facades\Route;
?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen User') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-bold">Daftar Pengguna</h3>
                    <a href="{{ route('admin.users.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah User</a>
                </div>

                <table class="min-w-full border">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-2 px-4 border">#</th>
                            <th class="py-2 px-4 border">Nama</th>
                            <th class="py-2 px-4 border">Email</th>
                            <th class="py-2 px-4 border">Role</th>
                            <th class="py-2 px-4 border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="py-2 px-4 border">{{ $loop->iteration }}</td>
                                <td class="py-2 px-4 border">{{ $user->name }}</td>
                                <td class="py-2 px-4 border">{{ $user->email }}</td>
                                <td class="py-2 px-4 border">{{ $user->getRoleNames()->first() }}</td>
                                <td class="py-2 px-4 border">
                                    <a href="{{ route('admin.users.edit', $user->id) }}" class="text-blue-600 hover:underline">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
