<!DOCTYPE html>
<html>
<style>
    .error {
        color: #FF0000;
    }
</style>

<head>
    <title>Skill Share|Sign Up</title>
    <link rel="stylesheet" type="text/css" href="SingUp.css">
</head>

<body>
    <h1>Sign Up</h1>

    <form method="POST" action="../Controller/CSingUp.php">

        <label for="user_type">Type</label>
        <input type="radio" name="user_type" value="admin">Admin
        <input type="radio" name="user_type" value="student">Student
        <input type="radio" name="user_type" value="teacher">teacher
        <span class="error">* </span>
        <br><br>

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
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">* </span>
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

        <input type="submit" name="submit" value="Sign Up">
        <td><button type="button" onclick="window.location.href='singIn.php'">Sing Up</button></td>
    </form>

</body>

</html>