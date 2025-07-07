<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel SOC & NOC</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        @include('components.sidebar')

        <!-- Konten utama -->
        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>

</body>
</html>
