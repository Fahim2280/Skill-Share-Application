<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../View/SingIn.php');
} ?>
<!DOCTYPE html>
<html>


<head>
    <title>Skill Share|Add Instructor</title>
    <link rel="stylesheet" type="text/css" href="U.css">
</head>

<body>
    <h1>Add Instructor</h1>
    <form method="POST" action="../controller/CInstructor.php">

        <label for="username">Username </label>
        <span class="error">* </span>
        <input type="text" name="username" id="username">
        <br><br>

        <label for="password">Password </label>
        <span class="error">* </span>
        <input type="password" name="password" id="password">
        <br><br>

        <label for="email">Email </label>
        <span class="error">* </span>
        <input type="email" name="email" id="email">
        <br><br>

        <label for="phone">Phone </label>
        <span class="error">* </span>
        <input type="tel" name="phone" id="phone">
        <br><br>

        <label for="gender">Gender</label>
        <span class="error">* </span>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <br><br>

        <label for="address">Address </label>
        <span class="error">* </span>
        <input type="text" name="address" id="address">
        <br><br>

        <label for="city">City </label>
        <span class="error">* </span>
        <input type="text" name="city" id="city">
        <br><br>

        <label for="state">State </label>
        <span class="error">* </span>
        <input type="text" name="state" id="state">
        <br><br>

        <label for="zip">Zip </label>
        <span class="error">* </span>
        <input type="text" name="zip" id="zip">
        <br><br>

        <label for="country">Country </label>
        <span class="error">* </span>
        <input type="text" name="country" id="country">
        <br><br>

        <label for="dob">Date of Birth </label>
        <span class="error">* </span>
        <input type="date" name="dob" id="dob">

        <br><br>

        <label>Github</label>
        <span class="error">* </span>
        <input type="text" name="github">

        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>