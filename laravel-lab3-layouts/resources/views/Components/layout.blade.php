<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Scrolling Blog - Modern Design</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <nav class="navbar">
        <ul>
            <li><a href="{{ route('blog') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
        </ul>
    </nav>

    @yield('content')

    <footer class="footer">
        <p>&copy; 2024 JDM. All rights reserved.</p>
    </footer>
    
</body>
</html>
