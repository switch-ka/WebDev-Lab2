<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrolling Blog - Modern Design</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <video autoplay muted loop class="video-background" preload="auto">
        <source src="/images/carvid4.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <nav class="navbar">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
            @if (session('username'))
                <li><a href="{{ route('welcome') }}">Logout</a></li>
            @endif
        </ul>
    </nav>

    <section id="home" class="section">
        <div class="container">
            <header>
            <h1>{{ $message }}</h1>
            </header>
        </div>
    </section>
    <footer class="footer">
                <p>&copy; 2024 JDM. All rights reserved.</p>
            </footer>
</body>
</html>
