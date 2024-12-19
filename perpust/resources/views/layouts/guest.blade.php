<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Perpustakaan MDA</title>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600&display=swap" rel="stylesheet">
    <link rel="website icon" href="{{ asset('images/logo-saya-li.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Tambahkan ke bagian style dalam <head> pada layout */
        body {
            font-family: 'Outfit', sans-serif;
            background-color: #F5F5DC;
            /* Warna latar belakang halaman */
            color: #004225;
            /* Warna teks utama */
        }

        .text-primary {
            color: #004225;
            /* Teks utama */
        }

        .bg-primary {
            background-color: #004225;
            /* Latar belakang utama */
        }

        .text-accent {
            color: #FFB000;
            /* Aksen utama */
        }

        .bg-accent {
            background-color: #FFB000;
            /* Warna latar belakang aksen */
        }

        .bg-light-accent {
            background-color: #FFCF9D;
            /* Warna latar belakang aksen terang */
        }
    </style>
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-secondary">
        <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-primary" />
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
