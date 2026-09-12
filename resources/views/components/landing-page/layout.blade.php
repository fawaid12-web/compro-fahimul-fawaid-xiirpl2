<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'I Am Geprek Bensu') }}</title>

        <!-- Fonts: Plus Jakarta Sans (sesuai desain Stitch) -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Material Symbols (dipakai untuk semua ikon di navigation & home) -->
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .material-symbols-outlined {
                font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
                display: inline-block;
                vertical-align: middle;
                line-height: 1;
            }
            .custom-violet-shadow {
                box-shadow: 0 4px 16px -2px rgba(81, 45, 168, 0.08);
            }
            .custom-violet-shadow-hover:hover {
                box-shadow: 0 16px 32px -4px rgba(81, 45, 168, 0.16);
            }
        </style>
    </head>
    <body class="font-sans text-on-surface bg-background antialiased selection:bg-secondary-container selection:text-on-secondary-container">
        {{ $slot }}
    </body>
</html>