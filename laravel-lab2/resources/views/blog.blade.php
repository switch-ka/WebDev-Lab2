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
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
    </nav>

    <!--Home-->
    <section id="home" class="section">
        <div class="container">
            <header>
                <h1>Welcome to Our Blog</h1>
            </header>
            <p>This is where the latest articles and blog posts will appear. Enjoy reading!</p>
        </div>
    </section>

    <!--About Us-->
    <section id="about" class="section">
        <div class="container">
            <header>
                <h1>About Us</h1>
            </header>
            <p>Learn more about us and what we do. We are passionate about sharing insightful content with our readers.</p>
        </div>
    </section>

    <!--Contact Us -->
    <section id="contact" class="section">
        <div class="container">
            <header>
                <h1>Contact Us</h1>
            </header>
            <form action="#" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
    </section>
    
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
