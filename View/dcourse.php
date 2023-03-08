<!DOCTYPE html>
<html>
<style>
    .error {
        color: #FF0000;
    }
</style>

<head>
    <title>Skill Share|delete Courese</title>
</head>

<body>
    <h1>Delete Course</h1>
    <p><span class="error">* required field</span></p>
    <form method="POST" action="../controller/dcourse.php">
        <label for="cpurseID">Course ID </label>
        <input type="text" name="courseID" id="courseID">
        <span class="error">* </span>
        <br><br>
        <input type="submit" name="delete" value="Delete">
    </form>
</body>