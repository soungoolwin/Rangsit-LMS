<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&family=Mooli&family=Poppins&family=Roboto+Condensed:wght@300;700&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')

    @livewireStyles
</head>

<body style="font-family: 'Poppins', sans-serif;">

    {{ $slot }}

    @livewireScripts
</body>

</html>
