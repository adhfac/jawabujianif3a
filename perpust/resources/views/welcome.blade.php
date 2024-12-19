<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Ngawi</title>
    
    <!-- Menambahkan Font Outfit dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600&display=swap" rel="stylesheet">
    <link rel="website icon" href="{{ asset('images/logo-saya-li.png') }}">

    <!-- Menambahkan Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Menambahkan CSS kustom untuk warna -->
    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }
        .bg-primary {
            background-color: #004225;
        }
        .text-primary {
            color: #004225;
        }
        .bg-secondary {
            background-color: #F5F5DC;
        }
        .text-secondary {
            color: #F5F5DC;
        }
        .bg-accent {
            background-color: #FFB000;
        }
        .text-accent {
            color: #FFB000;
        }
        .bg-light-accent {
            background-color: #FFCF9D;
        }
        .text-light-accent {
            color: #FFCF9D;
        }
    </style>
</head>
<body class="bg-secondary text-primary">
    <header class="bg-primary text-secondary p-4">
        @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-accent ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-accent ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <main class="flex justify-center items-center min-h-screen bg-light-accent">
        <div class="text-center">
            <h1 class="text-4xl font-semibold text-primary">Selamat datang di Perpustakaan Negara Ngawi</h1>
            <p class="mt-4 text-lg text-primary">Silakan login atau daftar untuk melanjutkan</p>
        </div>
    </main>
</body>
</html>
