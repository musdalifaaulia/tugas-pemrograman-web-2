<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Aplikasi Data Kost' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MY KOST</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/kosts">Data Kost</a>
            </div>
        </div>
    </nav>

    <div class="bg-secondary py-5 text-center text-white">
        <h1 class="fw-bold">{{ $title ?? 'Data Kost' }}</h1>
        <p>Daftar kost tersedia</p>
    </div>

    <div class="container my-5">
        {{ $slot }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
