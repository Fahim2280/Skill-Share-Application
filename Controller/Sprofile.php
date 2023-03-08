<?php
if (isset($_POST['view_profile'])) {
    // Retrieve the username from the form
    $username = $_POST['username'];

    // Retrieve the student data from the text file
    $students = file('../Model/student.txt');

    // Search for the student data based on the username
    $student_data = null;
    foreach ($students as $student) {
        $student_fields = explode('|', $student);
        if (trim($student_fields[1]) == $username) {
            $student_data = $student_fields;
            break;
        }
    }

    // Display the student profile data and options
    if ($student_data != null) {
        $name = $student_data[1];
        $student_id = $student_data[2];
        $major = $student_data[3];
        $gpa = $student_data[4];?>

        <html>
            <head>
                <title>View Profile</title>
                <link rel="stylesheet" type="text/css" href="../View/Sprofile.css">
            </head>
        <?php

        // Display the student information
        echo "<div class='profile'>";
        echo "<h2>$name's Profile</h2>";
        echo "<p><strong>Student ID:</strong> $student_id</p>";
        echo "<p><strong>Major:</strong> $major</p>";
        echo "<p><strong>GPA:</strong> $gpa</p>";
        echo "</div>";

        // Display the options to view courses, update information, and delete account
        echo "<div class='options'>";
        echo "<h3>Options</h3>";
        echo "<ul>";
        echo "<li><a href='view_courses.php?username=$username'>View All Courses</a></li>";
        echo "<li><a href='update_information.php?username=$username'>Update Information</a></li>";
        echo "<li><a href='delete_account.php?username=$username'>Delete Account</a></li>";
        echo "</ul>";
        echo "</div>";
    } else {
        echo "<p>No student found with that username.</p>";
    }
}
?>