<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../View/SingIn.php');
} ?>
<!DOCTYPE html>
<html>

<head>
    <title>Skill Share|Update Course</title>
    <link rel="stylesheet" type="text/css" href="Ucourse.css">
</head>
<style>
    .error {
        color: #FF0000;
    }
</style>

<body>
    <h1>Update Course</h1>
    <form method="POST" action="../controller/Ucourse.php">
        <label for="cpurseID">Course ID </label>
        <span class="error">* </span>
        <input type="text" name="courseID" id="courseID" value="">

        <br><br>

        <label for="courseName">Course Name </label>
        <span class="error">* </span>
        <input type="text" name="courseName" id="courseName" value="">

        <br><br>

        <label for="courseDescription">Course Description </label>
        <span class="error">* </span>
        <input type="text" name="courseDescription" id="courseDescription" value="">

        <br><br>

        <label for="coursePrice">Course Price </label>
        <span class="error">* </span>
        <input type="text" name="coursePrice" id="coursePrice" value="">

        <br><br>

        <label for="courseDuration">Course Duration </label>
        <span class="error">* </span>
        <input type="text" name="courseDuration" id="courseDuration" value="">

        <br><br>

        <label for="courseCategory">Course Category </label>
        <span class="error">* </span>
        <input type="text" name="courseCategory" id="courseCategory" value="">

        <br><br>

        <label for="courseInstructor">Course Instructor </label>
        <span class="error">* </span>
        <input type="text" name="courseInstructor" id="courseInstructor" value="">

        <br><br>

        <label for="courseImage">Course Image </label>
        <span class="error">* </span>
        <input type="file" name="courseImage" id="courseImage" value="">

        <br><br>

        <label for="courseVideo">Course Video </label>
        <span class="error">* </span>
        <input type="file" name="courseVideo" id="courseVideo" value="">

        <br><br>

        <label for="courseRating">Course Rating </label>
        <span class="error">* </span>
        <input type="text" name="courseRating" id="courseRating">

        <br><br>

        <label for="courseStatus">Course Status </label>
        <span class="error">* </span>
        <input type="text" name="courseStatus" id="courseStatus">


        <br><br>

        <input type="submit" name="update" value="Update">
</body>