<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tailwind Test</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="text-center space-y-4">
        <h1 class="text-4xl font-bold text-blue-600">
            🎉 Tailwind is Working!
        </h1>
        <p class="text-lg text-gray-700">
            If you see this styled text, Tailwind v4 is installed correctly.
        </p>
        <button class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">
            Test Button
        </button>
    </div>

</body>
</html>