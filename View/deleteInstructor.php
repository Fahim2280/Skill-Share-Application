<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../View/SingIn.php');
} ?>
<!DOCTYPE html>

<head>
    <title>Skill Share|Delete Instructor</title>
</head>

<body>
    <form method="POST" action="../controller/dInstructor.php">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" value=""></td>
                <td><span class="error">*</span></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>