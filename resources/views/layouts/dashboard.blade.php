<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Wanderly') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('scripts')

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
</head>

<body class="bg-background text-on-background min-h-screen">
    @include('dasboard-partials.sidebar')
    <main class="flex-1 overflow-y-auto relative">
        @include('dasboard-partials.navbar')
        @yield('content')
    </main>
</body>

</html>