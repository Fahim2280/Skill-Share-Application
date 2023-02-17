<!DOCTYPE html>
<html>
<style>
    .error {
        color: #FF0000;
    }
</style>

<head>
    <title>Skill Share|Update Profile</title>
</head>

<body>
    <?php

    $username = $password = $email = $phone = $address = $city = $state = $zip = $country = $dob = $github = $linkedin = $gender = "";
    $usernameErr = $passwordErr = $emailErr = $phoneErr = $addressErr = $cityErr = $stateErr = $zipErr = $countryErr = $dobErr = $githubErr = $linkedinErr = $genderErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["username"])) {
            $usernameErr = "Username is required";
        } else {
            $username = test_input($_POST["username"]);
        }

        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = test_input($_POST["password"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["phone"])) {
            $phoneErr = "Phone is required";
        } else {
            $phone = test_input($_POST["phone"]);
        }

        if (empty($_POST["address"])) {
            $addressErr = "Address is required";
        } else {
            $address = test_input($_POST["address"]);
        }

        if (empty($_POST["city"])) {
            $cityErr = "City is required";
        } else {
            $city = test_input($_POST["city"]);
        }

        if (empty($_POST["state"])) {
            $stateErr = "State is required";
        } else {
            $state = test_input($_POST["state"]);
        }

        if (empty($_POST["zip"])) {
            $zipErr = "Zip is required";
        } else {
            $zip = test_input($_POST["zip"]);
        }

        if (empty($_POST["country"])) {
            $countryErr = "Country is required";
        } else {
            $country = test_input($_POST["country"]);
        }

        if (empty($_POST["dob"])) {
            $dobErr = "Date of Birth is required";
        } else {
            $dob = test_input($_POST["dob"]);
        }

        if (empty($_POST["github"])) {
            $githubErr = "Github is required";
        } else {
            $github = test_input($_POST["github"]);
        }

        if (empty($_POST["linkedin"])) {
            $linkedinErr = "LinkedIn is required";
        } else {
            $linkedin = test_input($_POST["linkedin"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h1>Sign Up</h1>
    <p><span class="error">* required field</span></p>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username </label>
        <input type="text" name="username" id="username">
        <span class="error">* <?php echo $usernameErr; ?></span>
        <br><br>

        <label for="password">Password </label>
        <input type="password" name="password" id="password">
        <span class="error">* <?php echo $passwordErr; ?></span>
        <br><br>

        <label for="email">Email </label>
        <input type="email" name="email" id="email">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>

        <label for="phone">Phone </label>
        <input type="tel" name="phone" id="phone">
        <span class="error">* <?php echo $phoneErr; ?></span>
        <br><br>

        <label for="gender">Gender</label>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>

        <label for="address">Address </label>
        <input type="text" name="address" id="address">
        <span class="error">* <?php echo $addressErr; ?></span>
        <br><br>

        <label for="city">City </label>
        <input type="text" name="city" id="city">
        <span class="error">* <?php echo $cityErr; ?></span>
        <br><br>

        <label for="state">State </label>
        <input type="text" name="state" id="state">
        <span class="error">* <?php echo $stateErr; ?></span>
        <br><br>

        <label for="zip">Zip </label>
        <input type="text" name="zip" id="zip">
        <span class="error">* <?php echo $zipErr; ?></span>
        <br><br>

        <label for="country">Country </label>
        <input type="text" name="country" id="country">
        <span class="error">* <?php echo $countryErr; ?></span>
        <br><br>

        <label for="dob">Date of Birth </label>
        <input type="date" name="dob" id="dob">
        <span class="error">* <?php echo $dobErr; ?></span>
        <br><br>

        <label>Github</label>
        <input type="text" name="github">
        <span class="error">* <?php echo $githubErr; ?></span>
        <br><br>

        <label>LinkedIn</label>
        <input type="text" name="linkedin">
        <span class="error">* <?php echo $linkedinErr; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Sign Up">
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $username;
    echo "<br>";
    echo $password;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $phone;
    echo "<br>";
    echo $address;
    echo "<br>";
    echo $city;
    echo "<br>";
    echo $state;
    echo "<br>";
    echo $zip;
    echo "<br>";
    echo $country;
    echo "<br>";
    echo $dob;
    echo "<br>";
    echo $github;
    echo "<br>";
    echo $linkedin;
    echo "<br>";
    echo $gender;
    ?>
</body>

</html>