<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            position: relative;
            z-index: 1;
        }

        main.bg-img {
            flex: 1 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            z-index: 2;
        }

        footer.bg-dark {
            background: #2f3234 !important;
            color: #fff !important;
            box-shadow: 0 -1px 8px rgba(0, 0, 0, 0.2);
            width: 100vw;
            flex-shrink: 0;
        }

        .fixed-footer {
            position: fixed;
            left: 0;
            bottom: 0;
            z-index: 10;
        }
    </style>
</head>

<body data-bs-theme="dark">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top p-3">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">PROJECT LOKI</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @auth
                        {{-- 🔹 Show when logged in --}}
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#about">About</a></li>
                        <li><a class="nav-link" href="#services">Services</a></li>
                        <li><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button type="submit" class="btn btn-link nav-link text-white bg-success"
                                    style="text-decoration: none;">
                                    LOGOUT
                                </button>
                            </form>
                        </li>
                    @endauth
                    @guest
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('login.form') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register.form') }}">Register</a>
                        </li> --}}

                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main -->
    <main class="bg-img">
        {{ $slot }}
    </main>

    <footer
        class="bg-dark text-white pt-3 p-2 py-3 mt-auto {{ request()->is('login') || request()->is('register') ? 'fixed-footer' : '' }}"
        id="contact">
        <div class="container-fluid text-center">
            <h5>@ PROJECT LOKI</h5>
        </div>
    </footer>
</body>

</html>
