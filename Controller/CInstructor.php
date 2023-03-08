<?php
$Uname = $_REQUEST['username'];
$Pass = $_REQUEST['password'];
$Email = $_REQUEST['email'];
$Phone = $_REQUEST['phone'];
//$gender = $_REQUEST['gender'];
$address = $_REQUEST['address'];
$city = $_REQUEST['city'];
$state = $_REQUEST['state'];
$zip = $_REQUEST['zip'];
$country = $_REQUEST['country'];
$dob = $_REQUEST['dob'];
$github = $_REQUEST['github'];

if ($Uname == null || $Pass == null || $Email == null || $Phone == null  || $address == null || $city  == null || $state == null || $zip == null || $country  == null || $dob  == null || $github == null) {
    echo "<h1 align= center> PLEASE FILL ALL THE FIELDS <h1/>";
} else {
    $data = $Uname . "|" . $Pass . "|" . $Email . "|" . $Phone . "|" . $address . "|" . $city . "|" . $state . "|" . $zip  . "|" . $country . "|" . $dob . "|" . $github . "\r\n";
    $file = fopen('../Model/Instructor.txt', 'a');
    fwrite($file, $data);

    echo "<h1 align= center> NEW ADDED SUCCESSFULLY <h1/>";
}
