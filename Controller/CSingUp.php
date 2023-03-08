<?php

$user_type = $_REQUEST['user_type'];
$Uname = $_REQUEST['username'];
$Pass = $_REQUEST['password'];
$Email = $_REQUEST['email'];
$Phone = $_REQUEST['phone'];
$Address = $_REQUEST['address'];
$gender = $_REQUEST['gender'];
$City = $_REQUEST['city'];
$State = $_REQUEST['state'];
$Zip = $_REQUEST['zip'];
$Country = $_REQUEST['country'];
$Dob = $_REQUEST['dob'];
$Github = $_REQUEST['github'];

if($user_type == null || $Uname == null || $Pass == null || $Email == null || $Phone == null || $Address == null || $gender == null || $City == null || $State == null || $Zip == null || $Country == null || $Dob == null || $Github == null){
    echo "Please fill all the fields";
}else{
    $data = $user_type . "|" . $Uname . "|" . $Pass . "|" . $Email . "|" . $Phone . "|" . $Address . "|" . $gender . "|" . $City . "|" . $State . "|" . $Zip . "|" . $Country . "|" . $Dob . "|" . $Github . "\r\n";

    switch ($user_type) {
        case "admin":
            $file = fopen("../Model/admin.txt", "a");
            fwrite($file, $data);
            fclose($file);
            break;
        case "student":
            $file = fopen("../Model/student.txt", "a");
            fwrite($file, $data);
            fclose($file);
            break;
        case "teacher":
            $file = fopen("../Modelteacher.txt", "a");
            fwrite($file, $data);
            fclose($file);
            break;
        default:
            echo "Error: Invalid user type";
    }

    echo "New user added successfully";
}
