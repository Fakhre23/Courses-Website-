<?php

require '../Static.files/ConnectionDB.php';

echo '<link rel="stylesheet" href="../Styilngfiles/courseInfo.css">';
echo '<link rel="stylesheet" href="../Styilngfiles/NavBstStyilng.css">';

if (isset($_GET['id'])) {
    $courseId = $_GET['id'];

    // Prepare and execute the SQL statement
    $sql = "SELECT * FROM courses WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $courseId, PDO::PARAM_INT);
    $stmt->execute();

    // Fetch course data
    $course = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($course) { 
        include "../Static.files/navBar.php"; 

        // Start of the container
        echo '<div class="course-container">';

        // Course name section
        echo '<div class="course-name"><h2>' . htmlspecialchars($course['name']) . '</h2></div>'; // Use htmlspecialchars to prevent XSS

        // Right Image section (image should pop out of the box)
        echo '<div class="right-img">';
        echo '<img src="https://picsum.photos/571/280" alt="Course Image" class="course-image">';
        echo '</div>';

        // Right Description section
        echo '<div class="right-descrption">';
        echo "<h3><strong>Short Name:</strong> " . htmlspecialchars($course['shortname']) . "</h3>";
        echo "<p><strong>Description:</strong> " . htmlspecialchars($course['descrption']) . "</p>";
        echo '</div>';

        // Left Date Box section
        echo '<div class="left-datebox">';
        echo "<p><strong>Start Date:</strong> " . htmlspecialchars($course['startDate']) . "</p>";
        echo "<p><strong>End Date:</strong> " . htmlspecialchars($course['endDate']) . "</p>";
        echo '</div>';

        // End of the container
        echo '</div>';
    } else {
        echo "Course not found.";
    }
} else {
    echo "Invalid course ID.";
}

// Footer section
echo '<footer class="footer">';
echo '<h4>© Copyright <span id="current-date"></span></h4>';
echo '</footer>';
?>

<script>
    // JavaScript to display the current year in the footer
    const getElement = document.getElementById('current-date');
    const currentDate = new Date().getFullYear();
    getElement.textContent = currentDate;
</script>
