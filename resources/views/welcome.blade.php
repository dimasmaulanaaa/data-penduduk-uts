<!DOCTYPE html>
<html>
<head>
    <title>Halaman Awal</title>
    <!-- Tambahkan link CSS Bootstrap di bawah ini -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #777;
            margin-bottom: 30px;
        }

        .list-group {
            max-width: 300px;
            margin: 0 auto;
        }

        .list-group-item {
            padding: 10px;
            border: none;
            background-color: cornflowerblue;
            margin-bottom: 10px;
        }

        .list-group-item a {
            color: #333;
            font-weight: bold;
            text-decoration: none;
            transition: color 0.3s;
        }

        .list-group-item a:hover {
            color: darkgreen;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Aplikasi Penduduk</h1>
        <p>Gunakan menu navigasi di bawah untuk mengakses fitur-fitur aplikasi.</p>
        
        <ul class="list-group">
            <li class="list-group-item">
                <a href="{{ route('provinsi.index') }}">Data Provinsi</a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('kota.index') }}">Data Kota</a>
            </li>
            <li class="list-group-item">
                <a href="{{ route('penduduk.index') }}">Data Penduduk</a>
            </li>
        </ul>
    </div>

    <!-- Tambahkan script JS Bootstrap di bawah ini -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
