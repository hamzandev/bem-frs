<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Default' }} | BEM-FRS</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../img/BEM FRS.png" type="image/bem-frs">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body style="font-family: 'Space Grotesk', sans-serif">
    <x-navbar></x-navbar>
    <main class="py-16 bg-gray-50">
        {{ $slot }}
    </main>
    {{-- footer --}}
    <x-footer></x-footer>


</body>

</html>
