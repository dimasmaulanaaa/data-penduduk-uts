<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Penduduk</title>
    <link rel="stylesheet" href="{{ asset('vendor/pagination/pagination.css') }}">
<script src="{{ asset('vendor/pagination/pagination.js') }}"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('/') }}">Aplikasi Penduduk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('provinsi.index') }}">Data Provinsi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kota.index') }}">Data Kota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('penduduk.index') }}">Data Penduduk</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
