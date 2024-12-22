<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>estoque app</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="font-sans">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-6 mt-5">
            <h2 class="text-2xl font-semibold text-center text-gray-800">
                <a href="/produtos" class="text-blue-600 hover:text-blue-800 transition duration-300">Veja os nossos produtos</a>
            </h2>
        </div>
    </nav>
</body>
</html>
