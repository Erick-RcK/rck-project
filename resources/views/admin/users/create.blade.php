

<x-app-layout>
    
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Tambah User Baru</h1>

        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block">Nama</label>
                <input type="text" name="name" class="w-full border rounded p-2" required>
            </div>

            <div class="mb-4">
                <label class="block">Email</label>
                <input type="email" name="email" class="w-full border rounded p-2" required>
            </div>

            <div class="mb-4">
                <label class="block">Password</label>
                <input type="password" name="password" class="w-full border rounded p-2" required>
            </div>

            <div class="mb-4">
                <label class="block">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="w-full border rounded p-2" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>
