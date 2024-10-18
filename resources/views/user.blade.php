<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<style>
    body {
        background-image: url(../img/sportbody.jpg);
        background-size: cover;
    }

    .navbar {
        background-color: #1c1c1c !important;
        padding: 0.5rem 1rem;
    }

    .nav-link {
        font-weight: bold;
        color: #fff !important;
        text-transform: uppercase;
    }

    .nav-link:hover {
        color: #ffc107 !important;
    }

    .navbar-brand {
        font-weight: bold;
        color: #fff !important;
    }

    .navbar-brand img {
        max-height: 30px;
    }

    .nav-item {
        padding: 0 10px;
    }

    .btn-login {
        background-color: transparent;
        border: 1px solid #fff;
        color: #fff;
        font-weight: bold;
    }

    .btn-login:hover {
        background-color: #fff;
        color: #1c1c1c;
    }
</style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <!-- Logo di kiri -->
                <a class="navbar-brand" href="#">
                    <img src="{{asset('img/logotelkomsel.png')}}" alt="Logo" width="30" height="30">
                </a>
                <!-- Toggler untuk mobile view -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Konten navbar -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Menu di tengah -->
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">LEADERBOARD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">GROUP ATHLETE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">BUAT SERTIFIKAT</a>
                        </li>
                    </ul>
                    <!-- Login button di sebelah kanan -->
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="btn btn-login" href="{{route('login')}}">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('user')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>