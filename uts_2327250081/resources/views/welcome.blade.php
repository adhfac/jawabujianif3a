<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Sakit MDA</title>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="website icon" href="{{ asset('images/logo.png') }}">
    <style>
        body {
            font-family: 'Titillium Web', sans-serif;
            background-color: #F3F3E0;
            color: #133E87;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Memastikan body mengambil seluruh tinggi viewport */
        }

        .header {
            background-color: #608BC1;
            padding: 50px 0;
            text-align: center;
            color: white;
        }

        .content {
            padding: 20px;
            text-align: center;
            flex-grow: 1; /* Membuat konten mengisi ruang yang tersisa */
        }

        .footer {
            background-color: #CBDCEB;
            padding: 10px 0; /* Padding footer yang lebih kecil */
            text-align: center;
            color: #133E87;
        }

        .btn-custom {
            margin: 10px;
            background-color: #133E87;
            color: white;
        }

        .btn-custom:hover {
            background-color: #608BC1;
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>Selamat Datang di Rumah Sakit MDP</h1>
        <p>Dapatkan Layanan Kesehatan Terbaik!</p>
        <a href="{{ route('login') }}" class="btn btn-custom">Masuk</a>
        <a href="{{ route('register') }}" class="btn btn-custom">Register</a>
    </div>

    <div class="content">
        <h2>Mengedepankan Pelayanan</h2>
        <p>Pelayanan terbaik menjadi prioritas kami</p>
    </div>

    <footer class="footer">
        <p>&copy; 2024 Rumah Sakit MDA <sub> Web oleh M. Dhafa Adjie Saputra 2327250081</sub></p>
        
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
