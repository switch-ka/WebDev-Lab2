<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrolling Blog - Modern Design</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <!--Nav -->
    <nav class="navbar">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
        </ul>
    </nav>
    <!--About Us-->
    <section id="about" class="section">
        <div class="container">
            <header>
                <h1>About Us</h1>
            </header>
            <p>Learn more about us and what we do. We are passionate about sharing insightful content with our readers.</p>
        </div>
    </section>
</body>
</html>
