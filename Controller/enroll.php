<?php
// Read the enrollment data from the form
$username = $_POST['username'];
$course_title = $_POST['course'];
$instructor_name = $_POST['instructor_name'];

// Open the enrollcourse text file in append mode and write the enrollment data
$file = fopen("../Model/enrollCourse.txt", "a") or die("Unable to open file!");
fwrite($file, "Username: " . $username . "\n");
fwrite($file, "Course Title: " . $course_title . "\n");
fwrite($file, "Instructor Name: " . $instructor_name . "\n");
fwrite($file, "Enrollment Date: " . date("Y-m-d H:i:s") . "\n\n");
fclose($file);

// Display a message indicating that the enrollment was successful
echo "<p>You have successfully enrolled in " . $course_title . "!</p>";
