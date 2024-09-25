<?php

require '../Static.files/ConnectionDB.php';


$sql = "SELECT * FROM courses";
$stmt = $conn->prepare($sql);
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses List</title>
    <link rel="stylesheet" href="../Styilngfiles/Allcourse.css">
    <link rel="stylesheet" href="../Styilngfiles/NavBstStyilng.css"> <!-- Navbar CSS file -->

</head>

<body>
    <?php include "../Static.files/navBar.php"; ?>

    <div class="courses-container">
        <h2>All Courses</h2>


        <?php foreach ($results as $result): ?>
            <div class="course-item">
                <h3><a href="CourseInfo.php?id=<?php echo $result['id']; ?>"><?php echo $result['name']; ?></a></h3>
                <p><strong>Short Name:</strong> <?php echo ($result['shortname']); ?></p>
                <p><strong>Description:</strong> <?php echo ($result['descrption']); ?></p>
            </div>
        <?php endforeach; ?>

    </div>

    <footer class="footer">
        <h4>© Copyright <span id="current-date"></span></h4>
    </footer>

    <!-- ***************************************************** -->
    <script>
        const getElement = document.getElementById('current-date');
        const currentDate = new Date().getFullYear();
        getElement.textContent = currentDate;
    </script>

    <script src="fileName.js" charset="utf-8"></script>

    <!-- ***************************************************** -->
</body>

</html>