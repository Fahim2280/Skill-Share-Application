<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../View/SingIn.php');
} ?>
<!DOCTYPE html>
<html>
<style>
    .error {
        color: #FF0000;
    }
</style>

<head>
    <title>Skill Share|Add Courese</title>
</head>

<body>
    <h1>Add Course</h1>
    <p><span class="error">* required field</span></p>
    <form method="POST" action="../controller/Ccourse.php">
        <label for="cpurseID">Course ID </label>
        <input type="text" name="courseID" id="courseID">
        <span class="error">* </span>
        <br><br>

        <label for="courseName">Course Name </label>
        <input type="text" name="courseName" id="courseName">
        <span class="error">* </span>
        <br><br>

        <label for="courseDescription">Course Description </label>
        <input type="text" name="courseDescription" id="courseDescription">
        <span class="error">* </span>
        <br><br>

        <label for="coursePrice">Course Price </label>
        <input type="text" name="coursePrice" id="coursePrice">
        <span class="error">* </span>
        <br><br>

        <label for="courseDuration">Course Duration </label>
        <input type="text" name="courseDuration" id="courseDuration">
        <span class="error">* </span>
        <br><br>

        <label for="courseCategory">Course Category </label>
        <input type="text" name="courseCategory" id="courseCategory">
        <span class="error">* </span>
        <br><br>

        <label for="courseInstructor">Course Instructor </label>
        <input type="text" name="courseInstructor" id="courseInstructor">
        <span class="error">* </span>
        <br><br>

        <label for="courseImage">Course Image </label>
        <input type="file" name="courseImage" id="courseImage">
        <span class="error">* </span>
        <br><br>

        <label for="courseVideo">Course Video </label>
        <input type="file" name="courseVideo" id="courseVideo">
        <span class="error">* </span>
        <br><br>

        <label for="courseRating">Course Rating </label>
        <input type="text" name="courseRating" id="courseRating">
        <span class="error">* </span>
        <br><br>

        <label for="courseStatus">Course Status </label>
        <input type="text" name="courseStatus" id="courseStatus">
        <span class="error">* </span>

        <br><br>

        <input type="submit" name="submit" value="Sign Up">
</body>

</html>