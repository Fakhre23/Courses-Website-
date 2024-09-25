<?php
$successMessage = " ";
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    require '../Static.files/ConnectionDB.php';

    /*  // data in the form //  */

    $coursename = $_POST['course_name'];
    $shortname = $_POST['short_name'];
    $description = $_POST['description'];
    $startdate = $_POST['start_date'];
    $enddate = $_POST['end_date'];



    /* // insert course in the database //*/

    $sql = "INSERT INTO courses (name , shortname ,  descrption , startDate , endDate)
        VALUES (:coursename , :shortname , :description , :startdate , :enddate)";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':coursename', $coursename);
    $stmt->bindParam(':shortname', $shortname);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':startdate', $startdate);
    $stmt->bindParam(':enddate', $enddate);

    if ($stmt->execute()) {
        $successMessage = " Course inserted successfully";
    } else {
        $successMessage = "failed to insert the course";
    }
    ;

    $conn = null;


}


?>




<!--  // HTML content form //  -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Course</title>
    <link rel="stylesheet" href="../Styilngfiles/insertstyilng.css">
    <link rel="stylesheet" href="../Styilngfiles/NavBstStyilng.css">

</head>

<body>
    <?php include "../Static.files/navBar.php"; ?>

    <div class="form-container">
        <h2>Insert Course</h2>
        <?php if ($successMessage): ?>
            <div class="SuccessMessage">
                <?php echo $successMessage; ?>
            </div>
        <?php endif; ?>
        <form action="InsertForm.php" method="POST">
            <label for="course_name">Course Name:</label>
            <input type="text" id="course_name" name="course_name" required>

            <label for="short_name">Short Name (Unique):</label>
            <input type="text" id="short_name" name="short_name" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>

            <label for="start_date">Start Date:</label>
            <input type="date" id="start_date" name="start_date" required>

            <label for="end_date">End Date:</label>
            <input type="date" id="end_date" name="end_date" required>

            <button type="submit">Insert Course</button>
        </form>
    </div>



    <footer class="footer">
        <h4> © Copyright <span id="current-date"></span></h4>
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