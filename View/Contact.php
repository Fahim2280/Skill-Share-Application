<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../View/SingIn.php');
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="View/style.css">
</head>

<body>
    <div>
        <?php include 'header.php'; ?>
    </div>
    <main>
        <h1>Contact Us</h1>
        <form action="../Controller/contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>
            <br>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            <br>
            <input type="submit" value="Send">
        </form>
    </main>
    <div>
        <?php include 'footer.php'; ?>
    </div>
</body>

</html>