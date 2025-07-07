<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | SOC & NOC Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-white to-blue-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md bg-white shadow-xl rounded-xl p-8">
        <!-- Logo dan Judul -->
        <div class="text-center mb-6">
            <img src="{{ asset('images/download.png') }}" alt="Logo" class="w-20 mx-auto mb-3">
            <h2 class="text-2xl font-bold text-blue-900">Monitoring Panel</h2>
        </div>

        <!-- Form Login -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" type="email" name="email" required autofocus
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-600 focus:outline-none shadow-sm">
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" type="password" name="password" required
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-600 focus:outline-none shadow-sm">
            </div>

            <!-- Remember Me + Forgot -->
            <div class="flex items-center justify-between mb-4 text-sm">
                <label class="flex items-center text-gray-600">
                    <input type="checkbox" name="remember" class="mr-2">
                    Remember Me
                </label>
                <a href="{{ route('password.request') }}" class="text-blue-700 hover:underline">Forgot password?</a>
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full bg-blue-800 text-white font-semibold py-2 rounded-md hover:bg-blue-900 transition">
                Sign In
            </button>
        </form>

        <!-- Footer -->
        <p class="text-center text-xs text-gray-400 mt-6">© {{ date('Y') }} IT Dept. HW Group</p>
    </div>

</body>
</html>
