<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="../Styilngfiles/MainPageStyilng.css">

</head> 
<body>

    <div class="main-container">
        <h2>Course Management</h2>
        <div class="cards-container">
            <div class="card-left">
                <button onclick="location.href='InsertForm.php'">Insert Course</button>
            </div>
            <div class="card-right">
                <button onclick="location.href='AllCourses.php'">All Courses</button>
            </div>
        </div>
    </div>

    <footer class="footer">
        <h4>© Copyright <span id="current-date"></span></h4>
    </footer>

    <script>
        const getElement = document.getElementById('current-date');
        const currentDate = new Date().getFullYear();
        getElement.textContent = currentDate;
    </script>

</body>
</html>
