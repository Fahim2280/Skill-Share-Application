<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $course = $_POST["course"];

    $enrollment_data = "$username,$student_id,$course\n";

    $file = fopen("../Model/enrollCourse.txt", "a");
    fwrite($file, $enrollment_data);
    fclose($file);

    echo "Enrollment Successful!";
}
