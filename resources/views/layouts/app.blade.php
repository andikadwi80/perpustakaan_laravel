<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Perpustakaan</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<nav class="bg-blue-600 p-4">
    <div class="container mx-auto">
        <h1 class="text-white text-2xl font-bold">
            Sistem Perpustakaan
        </h1>
    </div>
</nav>

<div class="container mx-auto mt-8">

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')

</div>

</body>
</html>