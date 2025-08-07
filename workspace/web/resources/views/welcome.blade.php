<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Forward ESL') }}</title>
    
    <!-- Tailwind CSS CDN for development -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased">
    <div class="min-h-screen bg-gradient-to-br from-orange-500 to-blue-900 flex items-center justify-center">
        <div class="text-center">
            <h1 class="text-6xl font-bold text-white mb-4">Forward ESL</h1>
            <p class="text-xl text-orange-100 mb-8">English education. Reimagined.</p>
            <div class="bg-white/10 backdrop-blur-lg rounded-lg p-6 max-w-md mx-auto">
                <h2 class="text-2xl font-semibold text-white mb-4">Laravel Project Initialized!</h2>
                <p class="text-orange-100">Ready to build the Forward ESL website</p>
            </div>
        </div>
    </div>
</body>
</html>