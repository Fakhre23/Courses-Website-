<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link rel="stylesheet" href="./Styilngfiles/NavBstStyilng.css"> 
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <a href="#">MyWebsite</a> <!-- Replace with your website name or logo -->
        </div>
        <ul class="nav-links">
            <li><a href="MainPage.php">Home</a></li>
            <li><a href="AllCourses.php">Courses</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>

    <!-- Add your page content here -->
    <script>
        // JavaScript for toggling mobile menu
        const hamburger = document.querySelector(".hamburger");
        const navLinks = document.querySelector(".nav-links");

        hamburger.addEventListener("click", () => {
            navLinks.classList.toggle("active");
        });
    </script>
</body>
</html>
