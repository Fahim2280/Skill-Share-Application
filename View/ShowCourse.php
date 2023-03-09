<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../View/SingIn.php');
}
?>

<!DOCTYPE html>

<head>
    <title>Skill Share|All Enroll Course</title>
</head>

<body>
    <h1>All Enroll Course</h1>
    <table border="1">
        <tr>
            <th>Email</th>
            <th>Instructor Name</th>
            <th>Course Title</th>
            <th>Enrollment Date</th>
        </tr>
        <?php
        $user_email = $_SESSION["email"];

        $file = fopen("../Model/enrollCourse.txt", "r");
        $usernames = array();
        $course_titles = array();
        $instructor_names = array();
        $enrollment_dates = array();

        while (!feof($file)) {
            $line = fgets($file);
            if (strpos($line, "Username:") !== false) {
                $username = trim(str_replace("Username:", "", $line));
                if ($username === $user_email) {
                    // If the username matches the logged-in user's email, add the data to the arrays
                    $usernames[] = $username;
                    $course_titles[] = trim(fgets($file));
                    $instructor_names[] = trim(fgets($file));
                    $enrollment_dates[] = trim(fgets($file));
                }
            }
        }

        fclose($file);
        ?>
        <tr>
            <?php for ($i = 0; $i < count($usernames); $i++) { ?>
        <tr>
            <td><?php echo $usernames[$i]; ?></td>
            <td><?php echo $course_titles[$i]; ?></td>
            <td><?php echo $instructor_names[$i]; ?></td>
            <td><?php echo $enrollment_dates[$i]; ?></td>

        </tr>
    <?php } ?>
    </table>
</body>

</html>