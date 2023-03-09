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
    <title>Skill Share|delete Courese</title>
    <link rel="stylesheet" type="text/css" href="D.css">
</head>

<body>
    <h1>Delete Course</h1>
    <form method="POST" action="../controller/dcourse.php">
        <label for="cpurseID">Course ID </label>
        <span class="error">* </span>
        <input type="text" name="courseID" id="courseID">

        <br><br>
        <input type="submit" name="delete" value="Delete">
    </form>
</body>