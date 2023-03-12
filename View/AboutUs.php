<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../View/SingIn.php');
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="View/style.css">
</head>

<body>
    <div>
        <?php include 'header.php'; ?>
    </div>
    <main>
        <h1>About Us</h1>
        <p>We are a skill-share platform that connects people who want to learn a new skill with people who can teach that skill.</p>
        <p>Our platform offers a wide variety of courses, ranging from cooking to programming to graphic design.</p>
        <p>Our mission is to make learning accessible and affordable for everyone.</p>
    </main>
    <div>
        <?php include 'footer.php'; ?>
    </div>
</body>

</html>