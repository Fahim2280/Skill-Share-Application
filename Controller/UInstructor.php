<?php

$Uname = $_REQUEST['username'];
$Pass = $_REQUEST['password'];
$Email = $_REQUEST['email'];
$Phone = $_REQUEST['phone'];
$Address = $_REQUEST['address'];
$City = $_REQUEST['city'];
$State = $_REQUEST['state'];
$Zip = $_REQUEST['zip'];
$Country = $_REQUEST['country'];
$Dob = $_REQUEST['dob'];



if ($Uname == null || $Pass == null || $Email == null || $Phone == null || $Address == null || $City == null || $State == null || $Zip == null || $Country == null || $Dob == null) {
    echo "<h1 align= center> PLEASE FILL ALL THE FIELDS <h1/>";
} else {
    $data = $Uname . "|" . $Pass . "|" . $Email . "|" . $Phone . "|" . $Address . "|" . $City . "|" . $State . "|" . $Zip . "|" . $Country . "|" . $Dob . "|" . "\r\n";

    $i = 0;
    $array = array();

    $read = fopen("../Model/Instructor.txt", "r") or die("can't open the file");
    while (!feof($read)) {

        $array[$i] = fgets($read);
        ++$i;
    }
    fclose($read);

    $write = fopen("../Model/Instructor.txt", "w") or die("can't open the file");
    $d = 0;
    foreach ($array as $a) {
        if ($d == $Uname) {

            fwrite($write, $data);
        } else {
            fwrite($write, $a);
        }


        $d++;
    }
    fclose($write);

    echo "<h1 align= center > UPDATE SUCCESSFULLY <h1> <br>";
}
