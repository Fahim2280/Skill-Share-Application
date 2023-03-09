<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../View/SingIn.php');
}?>
<!DOCTYPE html>
<html>

<head>
    <title>Skill Share|All Courses</title>
</head>

<body>
    <h1>All Courses</h1>
    <table border="1">
        <tr>
            <th>Course ID</th>
            <th>Course Name</th>
            <th>Course Category</th>
            <th>Course Duration</th>
            <th>Course Price</th>
            <th>Course Details</th>
            <th>Course Instructor</th>

            <th>Course Images</th>
            <th>Course Video</th>
            <th>Course Rating</th>
            <th>Course Status</th>
        </tr>
        <?php
        $file = fopen("../Model/Course.txt", "r") or die("Unable to open file!");
        while (!feof($file)) {
            $line = fgets($file);
            $data = explode("|", $line); ?>
            <tr>
                <?php if (count($data) >= 11) {  ?>
            </tr>

            <tr>
                <td> <?php echo $data[0]; ?> </td>
                <td> <?php echo $data[1]; ?></td>
                <td> <?php echo $data[2]; ?> </td>
                <td> <?php echo $data[3]; ?></td>
                <td> <?php echo $data[4]; ?> </td>
                <td> <?php echo $data[5]; ?> </td>
                <td> <?php echo $data[6]; ?> </td>
                <td> <?php echo $data[7]; ?> </td>
                <td> <?php echo $data[8]; ?> </td>
                <td> <?php echo $data[9]; ?> </td>
                <td> <?php echo $data[10]; ?> </td>
            </tr>
    <?php }
            }
            fclose($file);
    ?>
    </table>
</body>

</html>