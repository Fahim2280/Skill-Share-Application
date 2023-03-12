<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('location: ../View/SingIn.php');
}
$filename = "../Model/Instructor.txt";
$handle = fopen($filename, "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $user_data = explode("|", $line);
        if ($user_data[3] == $_SESSION['email']) {
            $name = $user_data[1];
            $phone = $user_data[4];
            $address = $user_data[5];
            $gender = $user_data[6];
            $city = $user_data[7];
            $state = $user_data[8];
            $zipcode = $user_data[9];
            $country = $user_data[10];
            break;
        }
    }
    fclose($handle);
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="SD.css">


</head>

<body>

    <div>
        <?php include 'Header.php'; ?>
    </div>

    <div class="container">
        <?php
        if ($user_data[3] == $_SESSION['email']) {
        ?>
            <h1>Welcome, <?php echo $name = $user_data[1]; ?></h1>
            <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
            <p><strong>Phone:</strong> <?php echo $user_data[4]; ?></p>
            <p><strong>Address:</strong> <?php echo $user_data[5] ?></p>
            <p><strong>City:</strong> <?php echo $user_data[6]; ?></p>
            <p><strong>State:</strong> <?php echo $user_data[7]; ?></p>
            <p><strong>Zipcode:</strong> <?php echo $user_data[8]; ?></p>
            <p><strong>Country:</strong> <?php echo $user_data[9]; ?></p>
            <p><strong>Date of Birth:</strong> <?php echo $user_data[10]; ?></p>
            <a href="Scourse.php">Show all Course</a>
            <a href="ucourse.php">Update Course</a>
            <a href="dcourse.php">Delete Course</a>
            <a href="SInstructor.php">Show all Instructor</a>
            <a href="UInstructor.php">update Instructor</a>
            <a href="deleteInstructor.php">Delete Instructor</a>
            <ul>
            </ul>
        <?php
        } else {
            echo "You are not logged in";
        } ?>
    </div>

    <div>
        <?php include 'Footer.php'; ?>
    </div>

</body>

</html>