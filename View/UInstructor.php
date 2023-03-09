<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../View/SingIn.php');
} ?>
<!DOCTYPE html>
<html>

<head>
    <title>Skill Share|Update Instructor</title>
    <link rel="stylesheet" type="text/css" href="U.css">
</head>

<body>
    <h1>Update Instructor</h1>
    <p><span class="error">* required field</span></p>
    <form method="POST" action="../controller/UInstructor.php">
        <label for="username">Username </label>
        <input type="text" name="username" id="username" value="">
        <span class="error">* </span>
        <br><br>
        <label for="password">Password </label>
        <input type="password" name="password" id="password" value="">
        <span class="error">* </span>
        <br><br>
        <label for="email">Email </label>
        <input type="text" name="email" id="email" value="">
        <span class="error">* </span>
        <br><br>
        <label for="phone">Phone </label>
        <input type="text" name="phone" id="phone" value="">
        <span class="error">* </span>
        <br><br>
        <label for="address">Address </label>
        <input type="text" name="address" id="address" value="">
        <span class="error">* </span>
        <br><br>
        <label for="city">City </label>
        <input type="text" name="city" id="city" value="">
        <span class="error">* </span>
        <br><br>
        <label for="state">State </label>
        <input type="text" name="state" id="state" value="">
        <span class="error">* </span>
        <br><br>
        <label for="zip">Zip </label>
        <input type="text" name="zip" id="zip" value="">
        <span class="error">* </span>
        <br><br>
        <label for="country">Country </label>
        <input type="text" name="country" id="country" value="">
        <span class="error">* </span>
        <br><br>
        <label for="dob">Date of Birth </label>
        <input type="date" name="dob" id="dob" value="">
        <span class="error">* </span>
        <br><br>

        <label>Github</label>
        <input type="text" neme="github" id="github" value=""></input>
        <span class="error">* </span>
        <br><br>

        <input type="submit" name="submit" value="Update">
    </form>
</body>

</html>