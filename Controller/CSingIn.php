<?php
session_start();
$email = $_POST['email'];
$passwordword = $_POST['password'];

$admin_file = fopen("../Model/admin.txt", "r");
while (($line = fgets($admin_file)) !== false) {
    $data = explode("|", $line);
    if ($data[3] == $email && $data[2] == $passwordword) {
        setcookie('status', 'true', time() + 3600, '/');
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["password"] = $_POST["password"];
        header("Location: ../View/AdminDashboard.php");
        exit();
    }
}
fclose($admin_file);

$student_file = fopen("../Model/student.txt", "r");
while (($line = fgets($student_file)) !== false) {
    $data = explode("|", $line);
    if ($data[3] == $email && $data[2] == $passwordword) {
        setcookie('status', 'true', time() + 3600, '/');
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["password"] = $_POST["password"];
        header("Location: ../View/StudentDashboard.php");
        exit();
    }
}
fclose($student_file);


$teacher_file = fopen("../Model/Instructor.txt", "r");
while (($line = fgets($teacher_file)) !== false) {
    $data = explode("|", $line);
    if ($data[2] == $email && $data[1] == $passwordword) {
        setcookie('status', 'true', time() + 3600, '/');
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["password"] = $_POST["password"];
        header("Location: ../View/IDashboard.php");
        exit();
    }
}
fclose($teacher_file);

echo "Invalid Email or Password";
