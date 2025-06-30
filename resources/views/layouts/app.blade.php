<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>@yield('title', 'Maringo Sports Club')</title>

    <link href="https://fonts.googleapis.com/css2?family=Rubik+Glitch&family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #ffe259, #ffa751);
            font-family: 'Poppins', sans-serif;
            margin: 0;
        }

        .navbar {
            background-color: rgba(26, 35, 126, 0.95);
        }

        .navbar-brand {
            font-family: 'Rubik Glitch', cursive;
            font-size: 1.8rem;
            color: #fff !important;
        }

        .nav-link {
            color: #fff !important;
            font-weight: 500;
        }

        .nav-link:hover {
            text-decoration: underline;
        }

        .main-content {
            padding: 30px;
        }

        footer {
            background: #1a237e;
            color: white;
            text-align: center;
            padding: 15px;
            position: relative;
            margin-top: 50px;
        }
    </style>

    @stack('styles')
</head>
<body>

<!-- 🌐 Navbar -->
<nav class="navbar navbar-expand-lg shadow">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="fas fa-dumbbell me-2"></i> Maringo Club
        </a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon text-dark"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @if(auth()->check())
                    <li class="nav-item">
                        <a href="#" class="nav-link"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<!-- 🎯 Page Content -->
<div class="container main-content">
    @yield('content')
</div>

<!-- 🔻 Footer -->
<footer>
    &copy; {{ date('Y') }} Maringo Sports Club • Nairobi, Kenya • Designed with ❤️
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')

</body>
</html>
