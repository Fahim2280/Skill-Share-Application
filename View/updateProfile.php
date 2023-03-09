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
    <title>Skill Share|Update Profile</title>
    <link rel="stylesheet" type="text/css" href="U.css">
</head>

<body>
    <h1>Update Profile</h1>
    <p><span class="error">* required field</span></p>
    <form method="POST" action="">
        <label for="username">Username </label>
        <input type="text" name="username" id="username">
        <span class="error">*</span>
        <br><br>

        <label for="password">Password </label>
        <input type="password" name="password" id="password">
        <span class="error">* </span>
        <br><br>

        <label for="email">Email </label>
        <input type="email" name="email" id="email">
        <span class="error">* </span>
        <br><br>

        <label for="phone">Phone </label>
        <input type="tel" name="phone" id="phone">
        <span class="error">* </span>
        <br><br>

        <label for="gender">Gender</label>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">*</span>
        <br><br>

        <label for="address">Address </label>
        <input type="text" name="address" id="address">
        <span class="error">* </span>
        <br><br>

        <label for="city">City </label>
        <input type="text" name="city" id="city">
        <span class="error">* </span>
        <br><br>

        <label for="state">State </label>
        <input type="text" name="state" id="state">
        <span class="error">*</span>
        <br><br>

        <label for="zip">Zip </label>
        <input type="text" name="zip" id="zip">
        <span class="error">*</span>
        <br><br>

        <label for="country">Country </label>
        <input type="text" name="country" id="country">
        <span class="error">*</span>
        <br><br>

        <label for="dob">Date of Birth </label>
        <input type="date" name="dob" id="dob">
        <span class="error">*</span>
        <br><br>

        <label>Github</label>
        <input type="text" name="github">
        <span class="error">* </span>
        <br><br>

        <label>LinkedIn</label>
        <input type="text" name="linkedin">
        <span class="error">*</span>
        <br><br>

        <input type="submit" name="submit" value="Update">
    </form>
</body>

</html>