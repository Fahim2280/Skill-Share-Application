<?php
session_start();
if (!isset($_SESSION['email'])) {
     header('location: ../View/SingIn.php');
} ?>
<?php
echo "<h1> Application Successfull</h1> ";
