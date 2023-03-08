<!DOCTYPE html>
<html>

<head>
    <title>Skill Share|Update Course</title>
</head>
<style>
    .error {
        color: #FF0000;
    }
</style>

<body>
    <h1>Update Course</h1>
    <p><span class="error">* required field</span></p>
    <form method="POST" action="../controller/Ucourse.php">
        <label for="cpurseID">Course ID </label>
        <input type="text" name="courseID" id="courseID" value="">
        <span class="error">* </span>
        <br><br>

        <label for="courseName">Course Name </label>
        <input type="text" name="courseName" id="courseName" value="">
        <span class="error">* </span>
        <br><br>

        <label for="courseDescription">Course Description </label>
        <input type="text" name="courseDescription" id="courseDescription" value="">
        <span class="error">* </span>
        <br><br>

        <label for="coursePrice">Course Price </label>
        <input type="text" name="coursePrice" id="coursePrice" value="">
        <span class="error">* </span>
        <br><br>

        <label for="courseDuration">Course Duration </label>
        <input type="text" name="courseDuration" id="courseDuration" value="">
        <span class="error">* </span>
        <br><br>

        <label for="courseCategory">Course Category </label>
        <input type="text" name="courseCategory" id="courseCategory" value="">
        <span class="error">* </span>
        <br><br>

        <label for="courseInstructor">Course Instructor </label>
        <input type="text" name="courseInstructor" id="courseInstructor" value="">
        <span class="error">* </span>
        <br><br>

        <label for="courseImage">Course Image </label>
        <input type="file" name="courseImage" id="courseImage" value="">
        <span class="error">* </span>
        <br><br>

        <label for="courseVideo">Course Video </label>
        <input type="file" name="courseVideo" id="courseVideo" value="">
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

        <input type="submit" name="update" value="Update">
</body>