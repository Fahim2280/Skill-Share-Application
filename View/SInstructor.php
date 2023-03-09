<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../View/SingIn.php');
} ?>
<!DOCTYPE html>
<html>

<head>
    <title>Skill Share|All Instructor</title>
</head>

<body>
    <h1>All Instructor</h1>
    <table border="1">
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Email </th>
            <th>Phone</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>Country</th>
            <th>Date of Birth</th>
        </tr>

        <?php
        $file = fopen("../Model/Instructor.txt", "r") or die("Unable to open file!");
        while (!feof($file)) {
            $line = fgets($file);
            $data = explode("|", $line); ?>
            <tr>
                <?php if (count($data) >= 10) {  ?>
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
            </tr>
    <?php }
            }
            fclose($file);
    ?>
    </table>
</body>

</html>