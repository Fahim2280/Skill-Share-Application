<?php
session_start();
session_destroy();
?>
<?php 
echo "<hr>";
header('location:login.php');
?>