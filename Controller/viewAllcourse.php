<?php
// Check if the "View All Courses" button has been clicked
if(isset($_POST['view_courses'])) {
    // Open the text file and read all its contents
    $file = fopen("../Model/enrollments.txt", "r");
    $enrollment_data = fread($file, filesize("enrollments.txt"));
    fclose($file);

    // Split the enrollment data into individual lines and display them as a table
    $enrollments = explode("\n", $enrollment_data);
    echo "<table><tr><th>Username</th><th>Student ID</th><th>Course</th></tr>";
    foreach ($enrollments as $enrollment) {
        if(!empty($enrollment)) {
            $enrollment_parts = explode(",", $enrollment);
            $username = $enrollment_parts[0];
            $student_id = $enrollment_parts[1];
            $course = $enrollment_parts[2];
            echo "<tr><td>$username</td><td>$student_id</td><td>$course</td></tr>";
        }
    }
    echo "</table>";
}
?>