<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang | SOC/NOC Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-blue-100 min-h-screen flex items-center justify-center font-sans">

    <div class="bg-white rounded-2xl shadow-xl p-10 max-w-lg text-center">
        <div class="mb-6">
            <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel Logo" class="w-16 mx-auto mb-4">
            <h1 class="text-3xl font-bold text-blue-800">SOC / NOC Panel</h1>
            <p class="text-gray-600 mt-2">Selamat datang di sistem monitoring internal</p>
        </div>

        <a href="{{ route('login') }}"
           class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-300">
            🔐 Masuk ke Panel
        </a>

        <p class="text-xs text-gray-400 mt-6">© {{ date('Y') }} IT Dept. All rights reserved.</p>
    </div>

</body>
</html>
